petunjuk installasi:
- upload galnav ke wp-content/plugin
- aktifkan plugin lewat wpadmin
- tambahkan kode isgal(); sebelum the_content(); di template. kurang lebih seperti ini

<?php isgal(); ?>				
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>