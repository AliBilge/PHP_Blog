<?php
// Find a particular snack.
  function search ( $id = FALSE )
  { // Check if the submission is a number (integer.)
    if ( is_integer( $id ) )
    { // Check if the snack at this INDEX even EXISTS!?
      if ( isset( $this->lists[$id] ) )
      { // Retrieve that snack from the array!
        $blog = new blogList(
          $this->lists[$id]->title,
          $this->lists[$id]->content,
        );
        // Output that snack!
        $blog->output();
        echo $id;
      }
      // If the Snack is not found...
      else
      { // Output a warning for the user.
        echo '<p>Sorry, we couldn\'t find a snack at ID: '.$id.'!</p>';
      }
    }
    // No ID, or an invalid ID was passed.
    else
    { // Output a warning for the user.
      echo '<p>No ID, or an invalid ID was passed; unable to find snack for ID: '.$id.'.</p>';
    }
  }