<div class="container">
    <section class="blogs">
        <h2>All Posts</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Body</th>
                <th>Img</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php
                $id = 0;
                $posts = $data['posts'];

                foreach ($posts as $post) {
                    $id++;
                    $post_id = $post['id'];
                    $post_title = $post['title'];
                    $post_img = $post['img'];
                    $post_body = $post['body'];

                    echo <<<html
                        <tr><td>$id</td>
                        <td><p class="blog-title">$post_title</p></td>
                        <td><p class="blog-details">$post_body</p></td>
                        <td><p class="blog-title">$post_img</p></td>
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