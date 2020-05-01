<?php
class lists 
{
    public $title = '';
    public $content = '';


    // Out puts a blog.
    public function output ( $echo = TRUE )
    {
        $output = '';
        ob_start();
        ?>
        
        <dl>
            <dt></dt>
                <dd><?php echo $this->title; ?></dd>
            <dt>Content</dt>
                <dd><?php echo $this->comtent; ?></dd>
        </dl>
        
        <?php
        $output = ob_get_clean();
        if ( $echo === TRUE ) echo $output;
        return $output;
    }
}