<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact List API</title>
  <!-- Tailwind CSS -->
  <link href="../styles/output.css" rel="stylesheet">
</head>
<body>
  <header class="border-solid border-2 border-sky-500">
    <div class="container mx-auto flex flex-col items-center justify-center p-6 space-y-3">
      <h1 class="text-3xl font-medium text-center uppercase">
        Contact List RESTful API-Based CRUD Operation
      </h1>

      <p class="font-normal">USING: </p>

      <div class="flex flex-row items-center justify-center space-x-3">
        <img class="h-24" src="../images/tailwind-logo.png" alt="tailwind-logo">
        <img class="h-16" src="../images/php-logo.png" alt="php-logo">
        <img class="h-14" src="../images/sql-logo.png" alt="mysql-logo">
      </div>
    </div>
  </header>

  <main>
    <div class="mx-auto container p-6 flex items-center justify-center flex-col space-y-5 space-x-0 md:flex-row md:space-x-5 md:space-y-0">
      <button class="show-contact bg-amber-200 p-6 font-medium rounded-md">
        SHOW CONTACT
      </button>

      <button class="bg-lime-400 p-6 font-medium rounded-md">
        CREATE CONTACT
      </button>

      <button class="bg-fuchsia-400 p-6 font-medium rounded-md">
        UPDATE CONTACT
      </button>

      <button class="bg-red-400 p-6 font-medium rounded-md">
        DELETE CONTACT
      </button>
    </div>
  </main>