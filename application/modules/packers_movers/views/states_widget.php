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

    <div class="row g-3"> <!-- tighter gap -->

      <?php foreach ($state as $item): ?>
        <div class="col-6 col-md-4 col-lg-2">

          <div class="classic-state-card">

            <div class="csc-img">
              <img src="<?= base_url() ?>assets/images/state/<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
              <div class="csc-overlay"></div>
              <span class="csc-category"><?= $item['category'] ?></span>
            </div>

            <div class="csc-content">
              <h3 class="csc-title">
                <a href="<?= $item['link'] ?>"><?= $item['title'] ?></a>
              </h3>
              <a href="<?= $item['link'] ?>" class="csc-btn">
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
  /* ===== TIGHT CLASSIC STATE CARD ===== */
  .classic-state-card {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    border: 1px solid #edf2f7;
    border-bottom: 3px solid transparent;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .classic-state-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(3, 43, 105, 0.1);
    border-bottom: 3px solid #ff6a00;
    /* vibrant orange anchor */
  }

  .csc-img {
    width: 100%;
    height: 120px;
    /* Much smaller image height */
    overflow: hidden;
    position: relative;
  }

  .csc-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .classic-state-card:hover .csc-img img {
    transform: scale(1.08);
  }

  .csc-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, transparent, rgba(3, 43, 105, 0.3));
    opacity: 0;
    transition: opacity 0.3s;
  }

  .classic-state-card:hover .csc-overlay {
    opacity: 1;
  }

  .csc-category {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #ff6a00;
    /* Vibrant Orange Background */
    color: #ffffff;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    z-index: 2;
    box-shadow: 0 2px 6px rgba(255, 106, 0, 0.4);
  }

  .csc-content {
    padding: 12px 15px;
    /* Tighter padding */
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    background: linear-gradient(to bottom, #ffffff, #f8fafc);
    /* Subtle blue tint */
  }

  .csc-title {
    font-size: 14px;
    /* Smaller, cleaner title */
    font-weight: 700;
    line-height: 1.4;
    margin: 5px 0 12px 0;
  }

  .csc-title a {
    color: #032b69;
    /* Brand Blue Native */
    text-decoration: none;
    transition: color 0.3s;
  }

  .classic-state-card:hover .csc-title a {
    color: #ff6a00;
    /* Turn orange on hover */
  }

  .csc-btn {
    margin-top: auto;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 12px;
    font-weight: 600;
    color: #64748b;
    /* Sleek grey */
    text-decoration: none;
    transition: color 0.3s;
  }

  .csc-btn i {
    font-size: 10px;
    transition: transform 0.3s;
  }

  .classic-state-card:hover .csc-btn {
    color: #032b69;
  }

  .classic-state-card:hover .csc-btn i {
    transform: translateX(4px);
  }
</style>