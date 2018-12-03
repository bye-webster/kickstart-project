<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Interfaces\Base\PartyEmailRepository;
use App\Interfaces\Base\PartyPhoneRepository;
use App\Interfaces\Base\PartyRepository;
use App\Interfaces\Base\PartyUsersRepository;
use App\Interfaces\Base\PersonRepository;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use App\Models\Base\RegistrationPerson;
use App\Interfaces\Base\RegistrationPersonRepository;
use App\Interfaces\Base\UserRepository;
use App\Transformers\RegistrationPersonTransformer;

class RegistrationController extends Controller {

    /**
     * Instance of RegistrationPersonRepository
     *
     * @var RegistrationPersonRepository
     */
    private $registrationPersonRepository;

    /**
     * Instance of UserRepository
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * Instance of PartyRepository
     *
     * @var PartyRepository
     */
    private $partyRepository;

    /**
     * Instance of PartyUsersRepository
     *
     * @var PartyUsersRepository
     */
    private $partyUsersRepository;

    /**
     * Instance of PersonRepository
     *
     * @var PersonRepository
     */
    private $personRepository;

    /**
     * Instance of PartyPhoneRepository
     *
     * @var PartyPhoneRepository
     */
    private $partyPhoneRepository;

    /**
     * Instance of PartyEmailRepository
     *
     * @var PartyEmailRepository
     */
    private $partyEmailRepository;

    /**
     * Instanceof RegistrationPersonTransformer
     *
     * @var RegistrationPersonTransformer
     */
    private $registrationPersonTransformer;

    /**
     * Constructor
     *
     * @param RegistrationPersonRepository $registrationPersonRepository
     * @param UserRepository $userRepository
     * @param PartyRepository $partyRepository
     * @param PartyUsersRepository $partyUsersRepository
     * @param PersonRepository $personRepository
     * @param PartyPhoneRepository $partyPhoneRepository
     * @param PartyEmailRepository $partyEmailRepository
     * @param RegistrationPersonTransformer $registrationPersonTransformer
     */
    public function __construct(RegistrationPersonRepository $registrationPersonRepository,
                                UserRepository $userRepository,
                                PartyRepository $partyRepository,
                                PartyUsersRepository $partyUsersRepository,
                                PersonRepository $personRepository,
                                PartyPhoneRepository $partyPhoneRepository,
                                PartyEmailRepository $partyEmailRepository,
                                RegistrationPersonTransformer $registrationPersonTransformer)
    {
        $this->registrationPersonRepository = $registrationPersonRepository;
        $this->userRepository = $userRepository;
        $this->partyRepository = $partyRepository;
        $this->partyUsersRepository = $partyUsersRepository;
        $this->personRepository = $personRepository;
        $this->partyPhoneRepository = $partyPhoneRepository;
        $this->partyEmailRepository = $partyEmailRepository;
        $this->registrationPersonTransformer = $registrationPersonTransformer;
        parent::__construct();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|string
     */
    public function registration(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        DB::beginTransaction();
        
        try {

            if (!preg_match('"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"', $request['password'])){
				return $this->sendInvalidFilterResponse(['msg' => 'Minimum 8 characters at least 1 Alphabet and 1 Number !']);
            }
                        
            $registration_validator = $this->registrationPersonRepository->getByField('email_address', $request['email_address']);

            if (!isset($registration_validator->first()->email_address)) {

                // Validation
                $validatorResponse = $this->validateRequest($request, $this->storeRequestValidationRules($request));

                // Send failed response if validation fails
                if ($validatorResponse !== true) {
                    return $this->sendInvalidFieldResponse($validatorResponse);
                }

                $registrationPerson = $this->registrationPersonRepository->create($request->all());

                if (!$registrationPerson instanceof RegistrationPerson) {
                    return $this->sendCustomResponse(500, 'Error occurred on creating Person');
                }

                //Everything is done, let's fire
                DB::commit();
                        
                return $this->setStatusCode(201)->respondWithItem($registrationPerson, $this->registrationPersonTransformer);
                
            } else {

                $message = array(
                    'important' => 'Go Activate your account first.',
                    'activation_link' => $registration_validator->first()->activation_link
                );

                return $this->sendCustomResponse(200, $message);
            }

		} catch (\Exception $e) {
            DB::rollback();
            return $this->sendUnknownFieldResponse(['msg' => $e->getMessage(), 'line' => $e->getLine() , 'sxCode' => '000']);
        }  

    }

    /**
     * Activation Email
     *
     * @param string $activation_key
     * @return \Illuminate\Http\JsonResponse|string
     */
    public function account_confirmation($activation_key)
    {
        date_default_timezone_set('Asia/Jakarta');

        DB::beginTransaction();

        try {

            if (isset($activation_key)) {

                $check_registration_person = $this->registrationPersonRepository->getById($activation_key)->first();

                if (!$check_registration_person instanceof RegistrationPerson) {
                 return $this->sendNotFoundResponse("The activation key with key {$activation_key} doesn't exist");
                }

                $paramRegistrationPerson = array(
                'status_id' => 'PTY_ACTIVE'
                );

                $registration_person = $this->registrationPersonRepository->update($activation_key, $paramRegistrationPerson);

                if($registration_person){

                    $this->userRepository->save(array(
                        'status_id' => 'PTY_ACTIVE',
                        'email' => $check_registration_person->getAttributeValue('email_address'),
                        'password' => $check_registration_person->getAttributeValue('password')
                    ));

                    $result_party = $this->partyRepository->create(array(
                        'type_id' => '',
                        'status_id' => "PTY_ACTIVE",
                    ));

                    $party_id = $result_party->party_id;

                    $this->partyUsersRepository->create(array(
                        'party_id' => $party_id,
                        'email' => $check_registration_person->getAttributeValue('email_address'),
                    ));

                    //Everything is done, let's fire
                    DB::commit();

                    return $this->setStatusCode(200)->respondWithItem($check_registration_person, $this->registrationPersonTransformer);

                }

                return $this->respondWithItem($check_registration_person, $this->registrationPersonTransformer);

            }

        } catch (\Exception $e) {
            DB::rollback();
            return $this->sendUnknownFieldResponse(['msg' => $e->getMessage(), 'line' => $e->getLine() , 'sxCode' => '000']);
        }
    }

    /**
     * Store Request Validation Rules
     *
     * @param Request $request
     * @return array
     */
    private function storeRequestValidationRules(Request $request)
    {
        $rules = [
            'first_name'    => 'required|max:50',
            'last_name'     => 'required|max:50',
            'email_address'  => 'max:50',
            'password'  => 'required'
        ];

        return $rules;
    }
   
}