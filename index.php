<?php 
    include_once('includes/head.php');
    include_once('includes/db_conn.php');
    include_once('includes/db_helper.php');

    //open connection
    $conn = openConn();
    // check if user is logged in. function defined in db_helper.php
    $user_data = checkIfLoggedIn($conn);
    //translate and get translation data. function defined in db_helper.php 
    $translation_data = translate($conn);
    
?>


    <section id="welcome">
    <h1>Welcome <?php echo $user_data['username'];?></h1>
    </section>

    <!-- SEARCH SECTION -->
   <section class="search-box">
       <div id="search-side">

           <div class="search-head">
                <h3>Type an English word to search</h3>
           </div>
           <div class="seach-body">
               <form action="" method="POST">
                    <input name="search-text" id="search-area">
                    <button id="search-button" type="submit" name="submit">Translate</button>
               </form>
                
           </div>

       </div>

        <!-- <div class="search-button">
            
        </div> -->

       <div id="result-side">

           <div class="search-head">
            <h3>Mankon equivalent</h3>
           </div>
           <div class="result-body">
            <?php 
            //If search button is pushed, handle event
                if(isset($_POST['search-text'])){
                    //not sure try catch works but just included it
                    try{
                        //if translation data exists, display mankon translation to user 
                        if(isset($translation_data['mankon_equivalent'])){
                            echo $translation_data['mankon_equivalent'];
                        }
                        else {
                            //ele display not found
                            echo "Sorry not found";
                        }
                    }//catching exception
                    catch(Exception $e){
                        echo "Sorry not found";
                    }
                    
                    }
            ?>
           </div>

       </div>
   </section>
  
   <!-- COMMON TRANSLATIONS -->

   <section class="trans-section">
       <h1>Some common translations</h1>
       <div class="sel-cat">
                <span>Category  </span><select id="selectedCat">
                    <option value="Greeting">Greeting</option>
                    <option value="Question">Question</option>
                    <option value="Response">Response</option>
                    <option value="Common phrase">Common phrase</option>
                    <option value="Word">Word</option>
                </select>
            </div>
       
       <div class="table" id="greeting-tbl">
        <table>
            <tr>
                <th>English</th>
                <th>Mankon</th>
                <th>Category</th>
            </tr>

            <?php
            //for error display
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            //open connection
            $conn = openConn();
            //sql query to get all records from translations table in database
            $sql = "SELECT * FROM translation WHERE category = 'greeting'";
            //inititalise result to result from query execution
            $result = mysqli_query($conn, $sql);
            //printing out result to table as long as data exist
                while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['english_word']?></td>
                <td><?php echo $row['mankon_equivalent']?></td>
                <td><?php echo $row['category']?></td>

            </tr>
            <?php endwhile;?>
        </table>
        
    </div>

    <div class="table" id="question-tbl">
        <table>
            <tr>
                <th>English</th>
                <th>Mankon</th>
                <th>Category</th>
            </tr>

            <?php
            //for error display
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            //open connection
            $conn = openConn();
            //sql query to get all records from translations table in database
            $sql = "SELECT * FROM translation WHERE category = 'question'";
            //inititalise result to result from query execution
            $result = mysqli_query($conn, $sql);
            //printing out result to table as long as data exist
                while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['english_word']?></td>
                <td><?php echo $row['mankon_equivalent']?></td>
                <td><?php echo $row['category']?></td>

            </tr>
            <?php endwhile;?>
        </table>
        
    </div>

    <div class="table" id="response-tbl">
        <table>
            <tr>
                <th>English</th>
                <th>Mankon</th>
                <th>Category</th>
            </tr>

            <?php
            //for error display
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            //open connection
            $conn = openConn();
            //sql query to get all records from translations table in database
            $sql = "SELECT * FROM translation WHERE category = 'response'";
            //inititalise result to result from query execution
            $result = mysqli_query($conn, $sql);
            //printing out result to table as long as data exist
                while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['english_word']?></td>
                <td><?php echo $row['mankon_equivalent']?></td>
                <td><?php echo $row['category']?></td>

            </tr>
            <?php endwhile;?>
        </table>
        
    </div>               

    <div class="table" id="common-tbl">
        <table>
            <tr>
                <th>English</th>
                <th>Mankon</th>
                <th>Category</th>
            </tr>

            <?php
            //for error display
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            //open connection
            $conn = openConn();
            //sql query to get all records from translations table in database
            $sql = "SELECT * FROM translation WHERE category = 'common phrase'";
            //inititalise result to result from query execution
            $result = mysqli_query($conn, $sql);
            //printing out result to table as long as data exist
                while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['english_word']?></td>
                <td><?php echo $row['mankon_equivalent']?></td>
                <td><?php echo $row['category']?></td>

            </tr>
            <?php endwhile;?>
        </table>
        
    </div>               




    <div class="table" id="word-tbl">
        <table>
            <tr>
                <th>English</th>
                <th>Mankon</th>
                <th>Category</th>
            </tr>

            <?php
            //for error display
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            //open connection
            $conn = openConn();
            //sql query to get all records from translations table in database
            $sql = "SELECT * FROM translation WHERE category = 'word'";
            //inititalise result to result from query execution
            $result = mysqli_query($conn, $sql);
            //printing out result to table as long as data exist
                while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['english_word']?></td>
                <td><?php echo $row['mankon_equivalent']?></td>
                <td><?php echo $row['category']?></td>

            </tr>
            <?php endwhile;?>
        </table>
        
    </div>                     














   </section>

   

        <!-- <div id="translations-view">
        <div id="common-greetings">
            <h2>Greetings</h2>
            <p>Good Morning</p>
            <p>Good day</p>
            <p>Good night</p>
            <p>How are you</p>
        </div>
        <div class="greet-trans-equiv">
            <h2>Translation</h2>
            <p>njwi-la</p>
            <p>o jughe-ne</p>
            <p>fuulieh-fo</p>
            <p>abei-ne</p>
        </div>
        <div class="common-questions">
            <h2>Questions</h2>
            <p>How are you doing?</p>
            <p>What is your name?</p>
            <p>What is the time?</p>
            <p>Where are you from?</p>
            <p>Where are you going to?</p>
            <p>What are you doing?</p>
            <p>Where are you?</p>
        </div>
        <div class="ques-trans-equiv">
            <h2>Translation</h2>
            <p>o buu-ne</p>
            <p>e kum gho ne ke</p>
            <p>nyome ne ke</p>
            <p>o lo ghe</p>
            <p>o ghe ghee</p>
            <p>o fa-ah ke</p>
            <p>o mey</p>
        </div>
        <div class="common-responses">
            <h2>Responses</h2>
            <p>I am fine</p>
            <p>My name is Ngang</p>
            <p>Its 3:00AM</p>
            <p>I'm from school</p>
            <p>I'm going home</p>
            <p>I'm reading</p>
            <p>I'm home</p>
        </div>
        <div class="resp-trans-equiv">
            <h2>Translation</h2>
            <p>ma tsi shi ne</p>
            <p>kum ghe ne Ngang</p>
            <p>a ne be nyom bitare</p>
            <p>ma lo sucuru</p>
            <p>ma ghe tsu-ndah</p>
            <p>ma tong'ne nwaah-ne</p>
            <p>ma tche ndah</p>

        </div>
       </div> -->

  <?php include_once('includes/footer.php')?>