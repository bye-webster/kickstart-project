<?php

namespace App\Providers;

use App\Models\Base\City;
use App\Models\Base\Country;
use App\Models\Base\MayaPage;
use App\Models\Base\Media;
use App\Models\Base\MyStatus;
use App\Models\Base\MyTable;
use App\Models\Base\MyTableDefinition;
use App\Models\Base\MyType;
use App\Models\Base\Party;
use App\Models\Base\PartyAddress;
use App\Models\Base\PartyEmail;
use App\Models\Base\PartyMedia;
use App\Models\Base\PartyPhone;
use App\Models\Base\Person;
use App\Models\Base\Province;
use App\Models\Base\PartyUsers;
use App\Models\Base\SecurityGroup;
use App\Models\Base\SecurityGroupPermission;
use App\Models\Base\SecurityPermission;
use App\Models\Base\StatusType;
use App\Models\Base\UsersHistory;
use App\Models\Base\UsersSecurityGroup;
use App\Repositories\Base\CityEloquentRepository;
use App\Repositories\Base\CountryEloquentRepository;
use App\Repositories\Base\MayaPageEloquentRepository;
use App\Repositories\Base\MediaEloquentRepository;
use App\Repositories\Base\MyStatusEloquentRepository;
use App\Repositories\Base\MyTableDefinitionEloquentRepository;
use App\Repositories\Base\MyTableEloquentRepository;
use App\Repositories\Base\MyTypeEloquentRepository;
use App\Repositories\Base\PartyAddress\PartyAddressEloquentRepository;
use App\Repositories\Base\PartyEloquentRepository;
use App\Repositories\Base\PartyEmailEloquentRepository;
use App\Repositories\Base\PartyPhoneEloquentRepository;
use App\Repositories\Base\PartyUsersEloquentRepository;
use App\Repositories\Base\PersonEloquentRepository;
use App\Repositories\Base\ProvinceEloquentRepository;
use App\Repositories\Base\SecurityGroupEloquentRepository;
use App\Repositories\Base\SecurityGroupPermissionEloquentRepository;
use App\Repositories\Base\SecurityPermissionEloquentRepository;
use App\Repositories\Base\StatusTypeEloquentRepository;
use App\Repositories\Base\UsersHistoryEloquentRepository;
use App\Repositories\Base\UsersSecurityGroupEloquentRepository;
use Illuminate\Support\ServiceProvider;

// Models
use App\Models\Base\User;
use App\Models\Base\RegistrationPerson;

// Interfaces
use App\Interfaces\Base\UserRepository;
use App\Interfaces\Base\RegistrationPersonRepository;

// Repositories
use App\Repositories\Base\UserEloquentRepository;
use App\Repositories\Base\RegistrationPersonEloquentRepository;

use App\Interfaces\Base\ProvinceRepository;
use App\Interfaces\Base\CityRepository;
use App\Interfaces\Base\CountryRepository;
use App\Interfaces\Base\MayaPageRepository;
use App\Interfaces\Base\MediaRepository;
use App\Interfaces\Base\MyStatusRepository;
use App\Interfaces\Base\MyTableRepository;
use App\Interfaces\Base\MyTableDefinitionRepository;
use App\Interfaces\Base\MyTypeRepository;
use App\Interfaces\Base\PartyRepository;
use App\Interfaces\Base\PartyAddressRepository;
use App\Interfaces\Base\PartyEmailRepository;
use App\Interfaces\Base\PartyMediaRepository;
use App\Interfaces\Base\PartyPhoneRepository;
use App\Interfaces\Base\PartyUsersRepository;
use App\Interfaces\Base\PersonRepository;
use App\Interfaces\Base\SecurityGroupRepository;
use App\Interfaces\Base\SecurityGroupPermissionRepository;
use App\Interfaces\Base\SecurityPermissionRepository;
use App\Interfaces\Base\UsersHistoryRepository;
use App\Interfaces\Base\UsersSecurityGroupRepository;
use App\Interfaces\Base\StatusTypeRepository;


class AppRepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, function () {
            return new UserEloquentRepository(new User());
        });
        $this->app->bind(RegistrationPersonRepository::class, function () {
            return new RegistrationPersonEloquentRepository(new RegistrationPerson());
        });
        $this->app->bind(ProvinceRepository::class, function () {
            return new ProvinceEloquentRepository(new Province());
        });
        $this->app->bind(CityRepository::class, function () {
            return new CityEloquentRepository(new City());
        });
        $this->app->bind(CountryRepository::class, function () {
            return new CountryEloquentRepository(new Country());
        });
        $this->app->bind(MayaPageRepository::class, function () {
            return new MayaPageEloquentRepository(new MayaPage());
        });
        $this->app->bind(MediaRepository::class, function () {
            return new MediaEloquentRepository(new Media());
        });
        $this->app->bind(MyStatusRepository::class, function () {
            return new MyStatusEloquentRepository(new MyStatus());
        });
        $this->app->bind(MyTableRepository::class, function () {
            return new MyTableEloquentRepository(new MyTable());
        });
        $this->app->bind(MyTableDefinitionRepository::class, function () {
            return new MyTableDefinitionEloquentRepository(new MyTableDefinition());
        });
        $this->app->bind(MyTypeRepository::class, function () {
            return new MyTypeEloquentRepository(new MyType());
        });
        $this->app->bind(PartyRepository::class, function () {
            return new PartyEloquentRepository(new Party());
        });
        $this->app->bind(PartyAddressRepository::class, function () {
            return new PartyAddressEloquentRepository(new PartyAddress());
        });
        $this->app->bind(PartyEmailRepository::class, function () {
            return new PartyEmailEloquentRepository(new PartyEmail());
        });
        $this->app->bind(PartyMediaRepository::class, function () {
            return new PartyMedia(new PartyMedia());
        });
        $this->app->bind(PartyPhoneRepository::class, function () {
            return new PartyPhoneEloquentRepository(new PartyPhone());
        });
        $this->app->bind(PartyUsersRepository::class, function () {
            return new PartyUsersEloquentRepository(new PartyUsers());
        });
        $this->app->bind(PersonRepository::class, function () {
            return new PersonEloquentRepository(new Person());
        });
        $this->app->bind(SecurityGroupRepository::class, function () {
            return new SecurityGroupEloquentRepository(new SecurityGroup());
        });
        $this->app->bind(SecurityGroupPermissionRepository::class, function () {
            return new SecurityGroupPermissionEloquentRepository(new SecurityGroupPermission());
        });
        $this->app->bind(SecurityPermissionRepository::class, function () {
            return new SecurityPermissionEloquentRepository(new SecurityPermission());
        });
        $this->app->bind(StatusTypeRepository::class, function () {
            return new StatusTypeEloquentRepository(new StatusType());
        });
        $this->app->bind(UsersHistoryRepository::class, function () {
            return new UsersHistoryEloquentRepository(new UsersHistory());
        });
        $this->app->bind(UsersSecurityGroupRepository::class, function () {
            return new UsersSecurityGroupEloquentRepository(new UsersSecurityGroup());
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array(
            UserRepository::class,
            RegistrationPersonRepository::class,
            ProvinceRepository::class,
            CityRepository::class,
            CountryRepository::class,
            MayaPageRepository::class,
            MediaRepository::class,
            MyStatusRepository::class,
            MyTableRepository::class,
            MyTableDefinitionRepository::class,
            MyTypeRepository::class,
            PartyRepository::class,
            PartyAddressRepository::class,
            PartyEmailRepository::class,
            PartyMediaRepository::class,
            PartyPhoneRepository::class,
            PartyUsersRepository::class,
            PersonRepository::class,
            SecurityGroupRepository::class,
            SecurityGroupPermissionRepository::class,
            SecurityPermissionRepository::class,
            StatusTypeRepository::class,
            UsersHistoryRepository::class,
            UsersSecurityGroupRepository::class,
        );
    }
}