<?php include '../view/header.php'; ?>
<main>
   

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <?php  foreach ( $categories as  $category): ?>
            <tr>
               
                    <td> <?php  echo $category['categoryName']  ?> </td>
                    <form action="index.php" method="post">
                        <td> <input type="hidden" name="action" value="delete_category"></td>
                        <td> <input type="hidden" name="category_id" value="<?php echo $category['categoryID'] ?>"></td>

                        <td> <input type="submit" name="category_delete" value="delete"></td>
                    </form>
              
            </tr>
        <?php endforeach; ?>   
    </table>

    <h2>Add Category</h2>
    <form 
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_category" />

        <label>Name:</label>
        <input type="text" name="add_category_name" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>