<div class="container">
    <section class="blogs">
        <h2>All Products</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Img</th>
                <th>Category</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php
                $id = 0;
                $posts = $data['products'];
                $product = $data["productClass"];

                foreach ($posts as $post) {
                    $id++;
                    $post_id = $post['id'];
                    $post_title = $post['name'];
                    $post_img = $post['img'];
                    $post_price = $post['price'];
                    $post_body = $post['body'];
                    $product_category = $product->getProductCategory($post_id);
                    $product_category_name = $product_category[0]["name"];

                    echo <<<html
                        <tr><td>$id</td>
                        <td><p class="blog-title">$post_title</p></td>
                        <td><p class="blog-details">$post_body</p></td>
                        <td><p class="blog-title">$$post_price</p></td>
                        <td><p class="blog-title">$post_img</p></td>
                        <td><p class="blog-title">$product_category_name</p></td>
                        <td>
                        <div class="flex align-center gap-1">
                            <a target="_blank" href="./post.php?post_name={$post_title}&&id={$post_id}">View</a>
                            <a href="./blog.php?id={$post_id}">Delete</a>
                        </div>
                        </td></tr>
                    html;
                }
                ?>
            </tbody>
        </table>
    </section>

    <section class="write-blog">
        <h2>Write Post</h2>
        <form class="w-100 flex flex-column gap-2 align-start" enctype="multipart/form-data" method="post">
            <div class="flex flex-column gap-1 align-start">
                <label>Post Image</label>
                <input type="file" name="img">
            </div>
            <div class="flex flex-column gap-1 align-start">
                <label>Post Title</label>
                <input type="text" name="title">
            </div>
            <div class="flex flex-column gap-1 align-start">
                <label>Post Body</label>
                <textarea name="body" cols="30" rows="6"></textarea>
            </div>
            <button name="create-post" class="btn-primary" type="submit">Create Post</button>
        </form>
    </section>
</div>