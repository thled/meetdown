<?php declare(strict_types=1);

namespace Tests\Integration\Shared;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HealthCheckTest extends WebTestCase {
    /** @test */
    public function it_is_healthy(): void {
        $client = self::createClient();

        $client->request("GET", "/health");

        $response = $client->getResponse();
        self::assertSame(200, $response->getStatusCode());
        self::assertTrue($response->headers->contains("Content-Type", "application/json"));
        assert(is_string($response->getContent()));
        self::assertJsonStringEqualsJsonString(<<<JSON
            {"status": "up"}
            JSON, $response->getContent());
    }
}
