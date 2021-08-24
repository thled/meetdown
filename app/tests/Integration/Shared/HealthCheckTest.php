<?php declare(strict_types=1);

namespace Tests\Integration\Shared;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use function json_encode;

final class HealthCheckTest extends WebTestCase {
    /** @test */
    public function it_is_healthy(): void {
        $client = static::createClient();

        $client->request("GET", "/health");

        $response = $client->getResponse();
        self::assertSame(200, $response->getStatusCode());
        self::assertTrue($response->headers->contains("Content-Type", "application/json"));
        self::assertJsonStringEqualsJsonString("{\"status\": \"up\"}", $response->getContent());
    }
}
