<?php
    include 'data/states.php';
?>
<?php
  $state = [
      [
          "image" => "bihar.jpg",
          "category" => "Bihar",
          "title" => "Packers and Movers in Bihar",
          "link" => "bihar"
      ],
  ];
  ?>

  <!-- ===== BRANCH GRID ===== -->
  <section class="branch-section py-5">
    <div class="container">

      <div class="row g-4">

        <?php foreach ($state as $item): ?>
        <div class="col-6 col-lg-3">

          <div class="branch-card">

            <!-- IMAGE -->
            <div class="branch-img">
              <img src="<?= base_url() ?>assets/images/state/<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
              <div class="branch-overlay"></div>
            </div>

            <!-- CONTENT -->
            <div class="branch-content">
              <span class="branch-location"><?= $item['category'] ?></span>
              <h3>
                <a href="<?= $item['link'] ?>">
                  <?= $item['title'] ?>
                </a>
              </h3>

              <a href="<?= $item['link'] ?>" class="branch-btn">
                View Details <i class="fas fa-arrow-right"></i>
              </a>
            </div>

          </div>

        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

</main>

<style>
 

/* ===== BRANCH CARD ===== */
.branch-card {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 15px 40px rgba(0,0,0,0.05);
  transition: 0.3s;
  height: 100%;
}

.branch-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 25px 60px rgba(0,0,0,0.1);
}

/* IMAGE */
.branch-img {
  position: relative;
  height: 180px;
  overflow: hidden;
}

.branch-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 0.4s;
}

.branch-card:hover img {
  transform: scale(1.1);
}

/* OVERLAY */
.branch-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
}

/* CONTENT */
.branch-content {
  padding: 18px;
}

.branch-location {
  font-size: 12px;
  color: #16a34a;
  font-weight: 600;
  text-transform: uppercase;
}

.branch-content h3 {
  font-size: 16px;
  font-weight: 700;
  margin: 5px 0 12px;
}

.branch-content h3 a {
  color: #0f172a;
  text-decoration: none;
}

/* BUTTON */
.branch-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  font-weight: 600;
  color: #ff6a00;
  text-decoration: none;
  transition: 0.3s;
}

.branch-btn i {
  transition: 0.3s;
}

.branch-btn:hover i {
  transform: translateX(4px);
}
</style>