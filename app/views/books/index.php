<main class="w-full md:w-3/4 p-3">
        <h2 class="text-2xl font-bold mb-4">Books</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php include '../app/views/books/_index.php';?>

        </div>

        <div class="text-center mt-8">
          <button
            class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full"
          >
            Load More
          </button>
        </div>
      </main>
    </div>