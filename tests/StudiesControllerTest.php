<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Input;
use Scool\Curriculum\Models\Study;
use Scool\Curriculum\Repositories\StudyRepository;

/**
 * Class StudiesControllerTest
 *
 */
class StudiesControllerTest extends TestCase
{

    protected $repository;

    use DatabaseMigrations;

    public function __construct() {
        $this->repository = Mockery::mock(StudyRepository::class);
//        $this->login();
    }

    public function tearDown() {
        Mockery::close();
    }

    public function testIndexNotLogged()
    {
        $this->get('studies');
        $this->assertRedirectedTo('login');
    }

    private function createDummyStudies()
    {
        $study1 = new Study();
        $study2 = new Study();
        $study3 = new Study();
        $studies = [
            $study1,
            $study2,
            $study3
        ];
        return collect($studies);
    }

    /**
     *
     */
    public function testIndex()
    {
//        dd(route('studies.index'));
//        $studies1 = factory(\Scool\Curriculum\Models\Study::class,50)->make();
        //Fase 1 : preparació --> isolation/mocking
        $this->login();
        $this->repository->shouldReceive('all')->once()->andReturn(
            collect([])
        );
        $this->repository->shouldReceive('pushCriteria')->once();

        $this->app->instance(StudyRepository::class, $this->repository);

        $this->get('studies');
        $this->assertResponseOk();
        $this->assertViewHas('studies');

        $studies = $this->response->getOriginalContent()->getData()['studies'];
//        dd($studies);

        $this->assertInstanceOf(Illuminate\Support\Collection::class, $studies);
        $this->assertEquals(count($studies),0);
//        dd($studies);
        //1) Preparació
        //2) Execució
        //3) Assertions

        // Laravel asserts: https://laravel.com/docs/5.3/application-testing#phpunit-assertions
        //assertViewHas
        //assertResponseOk
        //assertRedirectedTo
        //assertRedirectedToRoute
        //assertRedirectedToAction
        //assertSessionHas
        //assertSessionHasErrors
    }

    /**
     * @group failing
     */
    public function testStore() {
        $this->login();
        Input::replace($input = ['name' => 'My Title']);
        $this->post('studies',['name' => 'Estudi nou']);
        $this->assertRedirectedToRoute('studies.create');
    }

    /**
     * 
     */
    public function testStoreValidationFails()
    {
//        Input::replace($input = ['name' => '']);

          // TestStore normal

        // The errors should be sent to the view
        //$this->assertSessionHasErrors(['title']);
    }

    /**
     *
     */
    public function testUpdate()
    {
        // 1) Prepare (login for example), isolate with mocking
//       mock
//            ->shouldReceive('create')
//            ->once();
//
//        $this->app->instance(StudyRepository::class, $this->repository);

        //execute
        //Asserts:
        //$this->assertRedirectedToRoute('studies.index');
    }

    public function testDelete()
    {

        //$this->assertRedirectedToRoute('studies.index');
    }

    //https://code.tutsplus.com/tutorials/testing-laravel-controllers--net-31456
    //TODO: assertSessionHas --> Comprovar missatge ok al crear/editar/esborrar
    //assertSessionHasErrors --> Comprovar validacions és a dir missatges error al editar/crear recursos no vàlids
    // (p.ex. faltes camps obligatoris)

    // TOTS ELS TESTS AMB MOCKING DE LA BASE DE DADES / REPOSITORI

    /**
     * Login
     */
    protected function login()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);
    }


}
