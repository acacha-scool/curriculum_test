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
        dd($this->response);
        $this->assertRedirectedToRoute('studies.create');
    }

    protected function login()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);
    }


}
