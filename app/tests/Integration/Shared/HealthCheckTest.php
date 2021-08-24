<?php declare(strict_types=1);

namespace App\Tests\Integration\Shared;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HealthCheckTest extends WebTestCase {
    /** @test */
    public function it_is_healthy(): void {
        $client = static::createClient();
        $crawler = $client->request("GET", "/health");
        self::assertResponseStatusCodeSame(200);
    }
}
