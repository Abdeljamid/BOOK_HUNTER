<h2 class="font-bold text-lg mb-4">Tags</h2>
          <div class="tag-cloud">
            
          <?php 
            include_once '../app/models/tagsModel.php';
            $tags = \App\Models\TagsModel\findAll($connexion);
            foreach($tags AS $tag) : ?>
              
              
                <a class="text-gray-300 hover:text-white text-sm" href="#">
                  <?php echo $tag['name'];?>
                </a>
              
            <?php endforeach ?>
            

          </div>