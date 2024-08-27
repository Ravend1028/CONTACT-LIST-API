<?php include 'templates/header.php'; ?>

  <section>
    <div class="container mx-auto flex flex-col items-center justify-center p-6">
      <div class="border border-black p-3 rounded">
        <p class="font-medium mb-4 uppercase text-center">Update Contact</p>

        <form class="update-form" method="POST">
          <label for="id">ID: </label><br>
          <input type="text" name="id" placeholder="Enter ID" class="border border-black p-2 mb-2"><br>
          <label for="name">Contact name: </label><br>
          <input type="text" name="name" placeholder="Enter name" class="border border-black p-2 mb-2"><br>
          <label for="number">Contact number: </label><br>
          <input type="text" name="number" placeholder="Enter number" class="border border-black p-2 mb-4"><br>
          <input type="submit" name="submit" value="UPDATE" class="submitter block mx-auto bg-black text-white rounded p-1 cursor-pointer">
        </form>
      </div>
    </div>
  </section>

<?php include 'templates/footer.php'; ?>