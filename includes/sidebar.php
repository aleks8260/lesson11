<div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
           <!--             <?php
                            if(isset($_POST['search'])){
                                $search = $_POST['search'];
                                echo $search.'<br>';
                                $sql_search = "SELECT * FROM posts WHERE tags LIKE '%$search%' ";
                                $search_query = mysqli_query($connection, $sql_search);
                                $count = mysqli_num_rows($search_query);
                                if($count == 0){
                                    echo 'Не найдено';
                                }else{
                                    echo $count;
                                }
                            }
                        ?>-->
                        <form action="search.php" method="post">
                            <input type="text" class="form-control" name="search">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                    <?php
                        $sql_cat = "SELECT * FROM categories LIMIT 3";
                        $cat_query = mysqli_query($connection, $sql_cat);
                    
                        foreach($cat_query as $item) {
                    ?>
                        <li>
                            <a href="#">
                                <?= $item['id'] ?>
                            </a>
                        </li>
                    <?php
                        }
                    ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                    <?php
                        $sql_cat = "SELECT * FROM categories";
                        $cat_query = mysqli_query($connection, $sql_cat);
                    
                        foreach($cat_query as $item) {
                    ?>
                        <li>
                            <a href="#">
                                <?= $item['title'] ?>
                            </a>
                            
                        </li>
               
                              
                    <?php
                        }
                    ?>
                                 <select name="" id="">
                            <option value=""><?= $item['title'] ?></option>
                        </select>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->