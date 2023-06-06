# Kanye West Quotes

This Laravel Livewire application fetches and displays random quotes from Kanye West using the Kanye.rest API. It provides a web page to view the quotes, a button to refresh the quotes manually, and an API route to fetch the quotes programmatically.

## Features

- Display 5 random Kanye West quotes on a web page using Livewire.
- Automatically refresh quotes every 60 seconds.
- Mobile-friendly design.
- API route to fetch 5 random Kanye West quotes.
- Optional features: Authentication for web page access and API route token authentication.
- Optional unit and feature tests for core functionalities.

## Requirements

- PHP >= 7.4
- Composer
- Docker (for Laravel Sail)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/kanye-quotes.git
   cd kanye-quotes

2. **Install dependencies:**
    ```bash
    composer install

3. **Set up Laravel Sail and start the development server:**
    ```bash
    ./vendor/bin/sail up -d

4. **Run migrations to set up the database:**
    ```bash
    ./vendor/bin/sail artisan migrate

