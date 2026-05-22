<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>
<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">

    <div id="cities-list" class="container feature-content-section py-5">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="premium-city-link">
                        <div class="premium-city-card">

                            <div class="pcc-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>

                            <div class="pcc-content">
                                <span class="pcc-subtitle">Packers and Movers</span>
                                <span class="pcc-title"><?= $ct['nm'] ?></span>
                            </div>

                            <div class="pcc-arrow">
                                <i class="bi bi-chevron-right"></i>
                            </div>

                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<style>
    /* ===== PREMIUM CITY CARD ===== */
    .premium-city-link {
        text-decoration: none;
        display: block;
        height: 100%;
    }

    .premium-city-card {
        background: #ffffff;
        border-radius: 8px;
        padding: 16px 14px;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        border: 1px solid #edf2f7;
        border-bottom: 2px solid #edf2f7;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .premium-city-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: #ff6a00;
        transform: scaleY(0);
        transition: transform 0.3s ease;
        transform-origin: bottom;
    }

    .premium-city-link:hover .premium-city-card {
        transform: translateY(-4px);
        box-shadow: 0 10px 22px rgba(3, 43, 105, 0.08);
        border-bottom-color: #ff6a00;
    }

    .premium-city-link:hover .premium-city-card::before {
        transform: scaleY(1);
    }

    .pcc-icon {
        width: 40px;
        height: 40px;
        background: rgba(3, 43, 105, 0.06);
        color: #032b69;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .premium-city-link:hover .pcc-icon {
        background: #ff6a00;
        color: #ffffff;
        transform: scale(1.1) rotate(-10deg);
    }

    .pcc-content {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .pcc-subtitle {
        font-size: 10px;
        color: #64748b;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 3px;
    }

    .pcc-title {
        font-size: 15px;
        color: #0f172a;
        font-weight: 800;
        transition: color 0.3s ease;
    }

    .premium-city-link:hover .pcc-title {
        color: #032b69;
    }

    .pcc-arrow {
        color: #cbd5e1;
        font-size: 13px;
        transition: all 0.3s ease;
    }

    .premium-city-link:hover .pcc-arrow {
        color: #ff6a00;
        transform: translateX(4px);
    }
</style>