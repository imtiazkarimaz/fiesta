<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\adminController;
use App\Event;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    /** @test */
    function FeatureTest()
    {
    $testEventF = factory(Event::class,1)->create();
    $testEventU = factory(Event::class,1)->create();
    $id = $testEventF->Event_id;
    $response = $this->call('GET', 'admin/events/feature/'.$id);
    $event = Event::where('Event_id',$id)->first();
    $event_feature_fromDB = $event->Featured;
    $this->assertEquals(1,$event_feature_fromDB);
    $this->assertEquals(0,$testEventU->Featured);
    $response = $this->call('GET', 'admin/events/unfeature/'.$id);
    $event = Event::where('Event_id',$id)->first();
    $event_unfeature_fromDB = $event->Featured;
    $this->assertEquals(0,$event_unfeature_fromDB);
    
    }
}
