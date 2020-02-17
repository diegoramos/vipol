  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

				<h2><?= $title; ?></h2>
				<h1><?php echo base_url(); ?></h1>

				<?php if (! empty($news) && is_array($news)) : ?>

				        <?php foreach ($news as $news_item): ?>

				                <h3><?= $news_item['blog_title'] ?></h3>

				                <div class="main">
				                        <?= $news_item['blog_description'] ?>
				                </div>
				                <p><a href="<?= '/news/'.$news_item['blog_id'] ?>">View article</a></p>

				        <?php endforeach; ?>

				<?php else : ?>

				        <h3>No News</h3>

				        <p>Unable to find any news for you.</p>

				<?php endif ?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->