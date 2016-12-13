<?php

use Scool\Curriculum\Stats\Stats;
use \Illuminate\Foundation\Testing\DatabaseMigrations;
use Scool\Curriculum\Stats\StudyStats;

/**
 * Class CurriculumStatsTest.
 */
class CurriculumStatsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * It sets model correctly.
     *
     * @test
     */
    public function it_sets_model_correctly()
    {
       Stats::of('Scool\Curriculum\Models\Study');
       $this->assertInstanceOf(Scool\Curriculum\Models\Study::class,Stats::model());
       Stats::of(Scool\Curriculum\Models\Study::class);
       $this->assertInstanceOf(Scool\Curriculum\Models\Study::class,Stats::model());
    }

    /**
     * It throws exception if provided class is not an eloquent model.
     *
     * @test
     * @group
     */
    public function it_throws_exception_if_provided_class_is_not_a_model()
    {
        $this->expectException(RuntimeException::class);
        Stats::of('StdClass');
    }

    /**
     * It throws exception if provided class does not exists.
     *
     * @test
     *
     */
    public function it_throws_exception_if_provided_class_does_not_exists()
    {
        $this->expectException(ReflectionException::class);
        Stats::of('Garbageasdasdaasdasd');

    }

    /**
     * It calculates total correctly.
     * @test
     */
    public function it_calculates_total_correctly() {
        factory(Scool\Curriculum\Models\Study::class,50)->create();
        Stats::of(Scool\Curriculum\Models\Study::class);
        $this->assertEquals(50,Stats::total());
    }

    /**
     * It calculates total relations correctly.
     * @test
     * @group failing
     */
    public function it_calculates_total_relations_correctly() {
        factory(Scool\Curriculum\Models\Study::class,50)->create();
        StudyStats::of(Scool\Curriculum\Models\Study::class);
        $this->assertEquals(50,StudyStats::totalLaws());
    }

}