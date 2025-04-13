<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title'=>'Eloquent Relationships',
            'shortcontent'=>'Master One to Many and Many to Many relationships in Eloquent with real examples.',
            'longcontent'=>'<p>Laravel Eloquent simplifies working with relationships between database tables.</p>

<h3>One to Many Example</h3>
<pre><code class="language-php">
// User.php
public function posts() {
    return $this->hasMany(Post::class);
}

// Post.php
public function user() {
    return $this->belongsTo(User::class);
}
</code></pre>

<h3>Many to Many Example</h3>
<pre><code class="language-php">
// User.php
public function roles() {
    return $this->belongsToMany(Role::class);
}

// Role.php
public function users() {
    return $this->belongsToMany(User::class);
}
</code></pre>',
'slug' => 'eloquent-relationships',
'category_id'=>1,
        ]);
        Article::create([
            'title' => 'Eager vs Lazy Loading in Eloquent',
            'shortcontent' => 'Avoid N+1 problems by understanding when to use eager vs lazy loading in Laravel.',
            'longcontent' => '<p>By default, Eloquent uses lazy loading which can cause performance issues.</p>
        
        <h3>Lazy Loading</h3>
        <pre><code class="language-php">
        $users = User::all();
        foreach ($users as $user) {
            echo $user->posts; // Triggers additional queries
        }
        </code></pre>
        
        <h3>Eager Loading</h3>
        <pre><code class="language-php">
        $users = User::with("posts")->get();
        </code></pre>
        
        <p>Eager loading retrieves all related data in fewer queries, optimizing performance.</p>',
        'slug' => 'eager-vs-lazy-loading-in-eloquent',
            'category_id' => 1,
        ]);
        Article::create([
            'title' => 'Accessors & Mutators Made Simple',
            'shortcontent' => 'Transform your model data effortlessly using accessors and mutators.',
            'longcontent' => '<p>Accessors and mutators let you format values when reading or writing model attributes.</p>
        
        <h3>Example: Accessor</h3>
        <pre><code class="language-php">
        // User.php
        public function getFullNameAttribute() {
            return $this->first_name . " " . $this->last_name;
        }
        </code></pre>
        
        <h3>Example: Mutator</h3>
        <pre><code class="language-php">
        protected function setPasswordAttribute($value)
        {
            $this->attributes["password"] = bcrypt($value);
        }
        </code></pre>',
        'slug' => 'accessors-and-mutators-made-simple',
            'category_id' => 1,
        ]);
        Article::create([
            'title' => 'Eloquent Query Scopes to Clean Your Code',
            'shortcontent' => 'Organize repetitive queries into reusable methods using local and global scopes.',
            'longcontent' => '<p>Scopes help extract and reuse common query logic in your models.</p>
        
        <h3>Local Scope Example</h3>
        <pre><code class="language-php">
        public function scopeActive($query) {
            return $query->where("status", "active");
        }
        
        // Usage
        $users = User::active()->get();
        </code></pre>
        
        <h3>Global Scope Example</h3>
        <pre><code class="language-php">
        protected static function booted() {
            static::addGlobalScope("verified", function ($builder) {
                $builder->where("is_verified", true);
            });
        }
        </code></pre>',
        'slug' => 'eloquent-query-scopes',
            'category_id' => 1,
        ]);
        Article::create([
            'title' => 'Mastering Blade Components and Slots',
            'slug' => 'mastering-blade-components-and-slots',
            'shortcontent' => 'Make your Laravel frontend cleaner and reusable using Blade components and named slots.',
            'longcontent' => '<p>Blade components are reusable UI blocks. Here\'s a quick example:</p>
        
        <h3>Create a Component</h3>
        <pre><code class="language-php">
        // resources/views/components/alert.blade.php
        <div class="alert alert-{{ $type }}">
            {{ $slot }}
        </div>
        </code></pre>
        
        <h3>Use it</h3>
        <pre><code class="language-blade">
        <x-alert type="warning">
            Please update your billing information.
        </x-alert>
        </code></pre>
        
        <p>Use named slots for more flexibility and organize your views beautifully!</p>',
            'category_id' => 2,
        ]);
        Article::create([
            'title' => 'Reusable Layouts with Blade Templates',
            'slug' => 'reusable-layouts-with-blade-templates',
            'shortcontent' => 'Create clean and maintainable layouts using Blade template inheritance and sections.',
            'longcontent' => '<p>Blade layouts let you keep your frontend DRY by reusing a base layout.</p>
        
        <h3>Layout File</h3>
        <pre><code class="language-blade">
        // resources/views/layouts/app.blade.php
        <html>
          <body>
            @yield("content")
          </body>
        </html>
        </code></pre>
        
        <h3>Using the Layout</h3>
        <pre><code class="language-blade">
        // resources/views/home.blade.php
        @extends("layouts.app")
        
        @section("content")
          <h1>Welcome Home!</h1>
        @endsection
        </code></pre>',
            'category_id' => 2,
        ]);
        Article::create([
            'title' => 'Blade Directives You Might Not Be Using',
            'slug' => 'blade-directives-you-might-not-be-using',
            'shortcontent' => 'Explore lesser-known but powerful Blade directives like @once, @json, and @unless.',
            'longcontent' => '<p>Blade includes many helpful directives beyond just @if and @foreach.</p>
        
        <h3>@once</h3>
        <pre><code class="language-blade">
        @once
          <script src="/js/modal.js"></script>
        @endonce
        </code></pre>
        
        <h3>@json</h3>
        <pre><code class="language-blade">
        &lt;script&gt;
            const user = @json($user);
        &lt;/script&gt;
        </code></pre>
        
        <h3>@unless</h3>
        <pre><code class="language-blade">
        @unless($user->isAdmin())
            You do not have permission to access this.
        @endunless
        </code></pre>',
            'category_id' => 2,
        ]);
        Article::create([
            'title' => 'What is Middleware in Laravel? Explained with Real Examples',
            'slug' => 'what-is-middleware-in-laravel',
            'shortcontent' => 'Learn how Laravel middleware works and how it filters HTTP requests using real-life examples.',
            'longcontent' => '<p>Middleware in Laravel acts as a layer that processes HTTP requests before they reach your controllers.</p>
        
        <h3>Example: Authentication Middleware</h3>
        <pre><code class="language-php">
        // routes/web.php
        Route::get("/dashboard", function () {
            return view("dashboard");
        })->middleware("auth");
        </code></pre>
        
        <p>This will block access to unauthenticated users and redirect them to login.</p>',
            'category_id' => 3,
        ]);
        Article::create([
            'title' => 'Creating Custom Middleware for Role-Based Access',
            'slug' => 'custom-middleware-for-role-access',
            'shortcontent' => 'Restrict users by role using custom middleware for cleaner and secure route control.',
            'longcontent' => '<p>To build a role-based system, create custom middleware like so:</p>
        
        <h3>Create Middleware</h3>
        <pre><code class="language-bash">
        php artisan make:middleware AdminOnly
        </code></pre>
        
        <h3>Inside Middleware</h3>
        <pre><code class="language-php">
        public function handle($request, Closure $next)
        {
            if (!auth()->check() || !auth()->user()->isAdmin()) {
                abort(403);
            }
            return $next($request);
        }
        </code></pre>
        
        <p>Register it in <code>app/Http/Kernel.php</code> and apply it to your admin routes!</p>',
            'category_id' => 3,
        ]);
        Article::create([
            'title' => 'Global vs Route Middleware: When to Use What',
            'slug' => 'global-vs-route-middleware',
            'shortcontent' => 'Understand the difference between global and route middleware and when to apply each.',
            'longcontent' => '<p>Laravel supports two types of middleware: global and route-specific.</p>
        
        <h3>Global Middleware</h3>
        <pre><code class="language-php">
        // app/Http/Kernel.php
        protected $middleware = [
            \\App\\Http\\Middleware\\CheckForMaintenanceMode::class,
        ];
        </code></pre>
        
        <h3>Route Middleware</h3>
        <pre><code class="language-php">
        Route::middleware(["auth", "verified"])->group(function () {
            Route::get("/dashboard", fn () => view("dashboard"));
        });
        </code></pre>
        
        <p>Use global middleware for app-wide logic. Use route middleware for specific paths only.</p>',
            'category_id' => 3,
        ]);
        Article::create([
            'title' => 'Building a RESTful API with Laravel and Sanctum',
            'slug' => 'restful-api-with-laravel-and-sanctum',
            'shortcontent' => 'Learn how to build secure REST APIs using Laravel Sanctum for token-based authentication.',
            'longcontent' => '<p>Laravel Sanctum makes it easy to build token-authenticated REST APIs without OAuth complexity.</p>
        
        <h3>Install Sanctum</h3>
        <pre><code class="language-bash">
        composer require laravel/sanctum
        php artisan vendor:publish --provider="Laravel\\Sanctum\\SanctumServiceProvider"
        php artisan migrate
        </code></pre>
        
        <h3>Protect API Routes</h3>
        <pre><code class="language-php">
        // routes/api.php
        Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
            return $request->user();
        });
        </code></pre>
        
        <p>Sanctum works well for single-page apps (SPAs) and mobile APIs.</p>',
            'category_id' => 4,
        ]);
        Article::create([
            'title' => 'Returning JSON Responses the Right Way',
            'slug' => 'returning-json-responses-in-laravel',
            'shortcontent' => 'Make your API responses consistent and meaningful using Laravel’s helper methods.',
            'longcontent' => '<p>Laravel provides convenient ways to return JSON in a clean and consistent format.</p>
        
        <h3>Simple JSON Response</h3>
        <pre><code class="language-php">
        return response()->json([
            "message" => "Success",
            "data" => $user,
        ]);
        </code></pre>
        
        <h3>With Status Code</h3>
        <pre><code class="language-php">
        return response()->json([
            "error" => "Unauthorized",
        ], 401);
        </code></pre>
        
        <p>This keeps your API predictable and easy to work with on the frontend.</p>',
            'category_id' => 4,
        ]);
        Article::create([
            'title' => 'Creating Resource Classes for Clean API Output',
            'slug' => 'api-resource-classes-in-laravel',
            'shortcontent' => 'Use Laravel’s API resources to transform data and keep your responses clean and structured.',
            'longcontent' => '<p>Laravel Resources help format your API responses with a consistent structure.</p>
        
        <h3>Create a Resource</h3>
        <pre><code class="language-bash">
        php artisan make:resource UserResource
        </code></pre>
        
        <h3>Inside the Resource Class</h3>
        <pre><code class="language-php">
        public function toArray($request)
        {
            return [
                "id" => $this->id,
                "name" => $this->name,
                "email" => $this->email,
            ];
        }
        </code></pre>
        
        <h3>Usage</h3>
        <pre><code class="language-php">
        return new UserResource($user);
        </code></pre>
        
        <p>Great for separating your data logic from controller logic.</p>',
            'category_id' => 4,
        ]);
        Article::create([
            'title' => 'Getting Started with Feature and Unit Testing',
            'slug' => 'getting-started-with-feature-and-unit-testing',
            'shortcontent' => 'Learn the difference between feature and unit tests in Laravel and how to create them using PHPUnit.',
            'longcontent' => '<p>Laravel supports two main test types out of the box: unit tests and feature tests.</p>
        
        <h3>Create a Test</h3>
        <pre><code class="language-bash">
        php artisan make:test ExampleTest
        </code></pre>
        
        <h3>Feature Test Example</h3>
        <pre><code class="language-php">
        public function test_home_page_loads()
        {
            $response = $this->get("/");
            $response->assertStatus(200);
        }
        </code></pre>
        
        <p>Unit tests are ideal for isolated logic. Feature tests check full HTTP flows and interactions.</p>',
            'category_id' => 5,
        ]);
Article::create([
    'title' => 'Testing APIs in Laravel with HTTP Assertions',
    'slug' => 'testing-apis-with-http-assertions',
    'shortcontent' => 'Test your API endpoints using Laravel’s built-in HTTP test methods and response assertions.',
    'longcontent' => '<p>Laravel makes it easy to test your APIs with expressive methods.</p>

<h3>Basic API Test</h3>
<pre><code class="language-php">
public function test_api_returns_users()
{
    $response = $this->getJson("/api/users");
    $response->assertStatus(200)
             ->assertJsonStructure([
                "*" => ["id", "name", "email"]
             ]);
}
</code></pre>

<p>Use <code>assertJson</code> and <code>assertJsonPath</code> for detailed validations.</p>',
    'category_id' => 5,
]);
Article::create([
    'title' => 'Faking Data with Laravel Factories and Seeders',
    'slug' => 'faking-data-with-factories-and-seeders',
    'shortcontent' => 'Quickly populate your test database with Laravel factories and seeders for realistic test cases.',
    'longcontent' => '<p>Use factories to create mock data for models during testing and development.</p>

<h3>Create a Factory</h3>
<pre><code class="language-bash">
php artisan make:factory UserFactory --model=User
</code></pre>

<h3>Inside Factory</h3>
<pre><code class="language-php">
public function definition()
{
    return [
        "name" => $this->faker->name(),
        "email" => $this->faker->unique()->safeEmail(),
    ];
}
</code></pre>

<h3>Using in Tests</h3>
<pre><code class="language-php">
User::factory()->count(10)->create();
</code></pre>',
    'category_id' => 5,
]);
Article::create([
    'title' => 'Laravel Breeze vs Jetstream vs Fortify — What to Use?',
    'slug' => 'laravel-breeze-vs-jetstream-vs-fortify',
    'shortcontent' => 'Learn the differences between Laravel Breeze, Jetstream, and Fortify to choose the right auth starter kit.',
    'longcontent' => '<p>Laravel offers three main authentication packages:</p>

<h3>Breeze</h3>
<pre><code class="language-bash">
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
</code></pre>
<p>Lightweight and great for simple projects.</p>

<h3>Jetstream</h3>
<p>Includes 2FA, teams, profile management, and sessions.</p>

<h3>Fortify</h3>
<p>Backend-only solution. Useful when you want to use your own frontend.</p>',
    'category_id' => 6,
]);
Article::create([
    'title' => 'Protecting Routes with Middleware in Auth',
    'slug' => 'protecting-routes-with-middleware',
    'shortcontent' => 'Secure your Laravel routes by applying authentication middleware and guards.',
    'longcontent' => '<p>Use the <code>auth</code> middleware to restrict access:</p>

<pre><code class="language-php">
// routes/web.php
Route::middleware("auth")->group(function () {
    Route::get("/dashboard", fn () => view("dashboard"));
});
</code></pre>

<p>You can also create custom guards for API vs web access.</p>',
    'category_id' => 6,
]);
Article::create([
    'title' => 'Reset Passwords, Verify Emails, and 2FA',
    'slug' => 'reset-password-verify-email-2fa',
    'shortcontent' => 'Enable Laravel’s built-in features for password resets, email verification, and two-factor authentication.',
    'longcontent' => '<p>Laravel Jetstream and Fortify come with password reset, email verification, and 2FA out of the box.</p>

<h3>Enable Email Verification</h3>
<pre><code class="language-php">
// User model
implements MustVerifyEmail
</code></pre>

<h3>2FA</h3>
<p>Jetstream provides 2FA support via TOTP authenticator apps like Google Authenticator.</p>

<h3>Reset Password</h3>
<pre><code class="language-php">
Password::sendResetLink($request->only("email"));
</code></pre>',
    'category_id' => 6,
]);
Article::create([
    'title' => 'Using Queues for Sending Emails in the Background',
    'slug' => 'using-queues-for-sending-emails',
    'shortcontent' => 'Speed up user experience by dispatching email jobs in the background using Laravel queues.',
    'longcontent' => '<p>Queues allow you to defer time-consuming tasks like email sending.</p>

<h3>Dispatch a Mail Job</h3>
<pre><code class="language-php">
Mail::to($user)->queue(new WelcomeEmail($user));
</code></pre>

<p>This prevents delays in HTTP responses and improves performance.</p>

<h3>Run the Queue Worker</h3>
<pre><code class="language-bash">
php artisan queue:work
</code></pre>',
    'category_id' => 7,
]);
Article::create([
    'title' => 'Setting Up Laravel Queues with Database Driver',
    'slug' => 'setting-up-laravel-queues-database',
    'shortcontent' => 'Learn how to configure Laravel queues using the database driver for reliable background processing.',
    'longcontent' => '<p>Laravel supports several queue drivers. Let’s use the database driver:</p>

<h3>Step 1: Configure .env</h3>
<pre><code class="language-env">
QUEUE_CONNECTION=database
</code></pre>

<h3>Step 2: Create jobs table</h3>
<pre><code class="language-bash">
php artisan queue:table
php artisan migrate
</code></pre>

<h3>Step 3: Run the worker</h3>
<pre><code class="language-bash">
php artisan queue:work
</code></pre>',
    'category_id' => 7,
]);
Article::create([
    'title' => 'Retry Failed Jobs and Monitoring Queues',
    'slug' => 'retry-failed-jobs-and-monitoring-queues',
    'shortcontent' => 'Handle failed jobs, retry them, and monitor queue performance for a stable system.',
    'longcontent' => '<p>Laravel tracks failed jobs in a dedicated table.</p>

<h3>Track Failures</h3>
<pre><code class="language-bash">
php artisan queue:failed-table
php artisan migrate
</code></pre>

<h3>Retry Failed Jobs</h3>
<pre><code class="language-bash">
php artisan queue:retry all
</code></pre>

<h3>Monitor Queues</h3>
<p>Use Horizon for monitoring and dashboards (especially with Redis).</p>',
    'category_id' => 7,
]);
Article::create([
    'title' => 'Understanding Laravel Events and Listeners',
    'slug' => 'understanding-laravel-events-and-listeners',
    'shortcontent' => 'Learn how Laravel’s events and listeners work together to separate concerns and respond to application behavior.',
    'longcontent' => '<p>Events provide a simple observer pattern implementation, allowing you to subscribe and listen for events in your app.</p>

<h3>Creating an Event and Listener</h3>
<pre><code class="language-bash">
php artisan make:event OrderPlaced
php artisan make:listener SendOrderConfirmation --event=OrderPlaced
</code></pre>

<h3>Dispatching an Event</h3>
<pre><code class="language-php">
event(new OrderPlaced($order));
</code></pre>

<p>This keeps your controller thin and pushes logic to listeners.</p>',
    'category_id' => 8,
]);
Article::create([
    'title' => 'Using Events to Decouple Your Application Logic',
    'slug' => 'using-events-to-decouple-logic',
    'shortcontent' => 'Events help decouple logic by allowing actions to occur after something happens, without hard dependencies.',
    'longcontent' => '<p>Imagine placing an order. Instead of sending email in the controller, fire an event and let listeners handle the side tasks.</p>

<h3>Event Driven Flow</h3>
<pre><code class="language-php">
event(new OrderPlaced($order));
</code></pre>

<h3>Listeners Handle It</h3>
<pre><code class="language-php">
public function handle(OrderPlaced $event)
{
    Mail::to($event->order->user)->send(new OrderConfirmation($event->order));
}
</code></pre>

<p>This allows easy testing, maintenance, and extensibility.</p>',
    'category_id' => 8,
]);
Article::create([
    'title' => 'Broadcasting Events with Laravel Echo',
    'slug' => 'broadcasting-events-with-laravel-echo',
    'shortcontent' => 'Use Laravel Echo and broadcasting to send real-time events to the frontend over WebSockets.',
    'longcontent' => '<p>Broadcasting lets you push real-time updates to the browser via channels and WebSockets.</p>

<h3>Enable Broadcasting</h3>
<pre><code class="language-env">
BROADCAST_DRIVER=pusher
</code></pre>

<h3>Broadcast the Event</h3>
<pre><code class="language-php">
class OrderShipped implements ShouldBroadcast
{
    public function broadcastOn()
    {
        return new PrivateChannel("orders." . $this->order->id);
    }
}
</code></pre>

<p>On the frontend, Laravel Echo receives it and updates the UI in real-time.</p>',
    'category_id' => 8,
]);
                                                                 
                        
    }
}
