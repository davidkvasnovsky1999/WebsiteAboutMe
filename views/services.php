
<?php
require_once('models/Service.php');
$arrayOfServicesIcon = array(
        new \models\Service("", "Poradenství s výběrem hotových počítačů, laptopů a PC příslušenství.", "fa-solid fa-desktop "),
    new \models\Service("", "Návrh, sestavení, odlazení PC sestavy pro práci, multimédia, hraní a další.", "fa-solid fa-server "),
    new \models\Service("", "Výměnu jednotlivých komponentů v rámci upgradu či nefunčnosti komponentů.", "fa-solid fa-memory "),
    new \models\Service("", "Přetaktování procesorů, operačních pamětí a grafických karet.", "fa-solid fa-microchip "),
    new \models\Service("", "Test stability sytému, pomocí programů OCCT, Prime95, MSI Kombustor a AIDA64.", "fa-solid fa-chart-line "),
    new \models\Service("", "Vytvoření diskového pole RAID za účelem redundance či zálohování dat a migrace OS či dat na jiný disk", "fa-solid fa-hard-drive "),
    new \models\Service("", "Instalace OS Windows 10/11, GNU/Linux, instalace ovladačů a software.", "fa-brands fa-windows "),
    new \models\Service("", "Delid Intel procesorů 3., 4., 5., 6., 7., 8. generace, aplikace tekutého kovu a přilepení IHS silikonem.", "fa-solid fa-droplet "),
    new \models\Service("", "Přepastování procesorů a grafických karet.", "fa-solid fa-syringe "),
    new \models\Service("", "Vodní chlazení na míru (otevřený vodní okruh).", "fa-solid fa-water "),
    new \models\Service("", "Vytvoření statických webových stránek podle předlohy.", "fa-solid fa-table-columns "),
    new \models\Service("", "Cenu za mé služby vám v případě vašeho zájmu o mé služby napíšu do emailu či SMS.", "fa-solid fa-money-bill-1 "),
    )

?>

<div id="sluzby" class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-5">Služby, které nabízím</h2>
        </div>
        <?php
            foreach ($arrayOfServicesIcon as $service) {
                echo '<div class="col-6 col-md-4 col-lg-3">';
                echo    '<div class="service_container">';
                echo                '<i class="'.$service->icon.'fs-1 text-center"></i>';
                echo                '<p class="mb-0">'.$service->description.'</p>';
                echo    '</div>';
                echo '</div>';

            }
        ?>
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-desktop fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Poradenství s výběrem hotových počítačů, laptopů a PC příslušenství.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!---->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-server fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Návrh, sestavení, odlazení PC sestavy pro práci, multimédia, hraní a další.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-memory fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Výměnu jednotlivých komponentů v rámci upgradu či nefunčnosti komponentů.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-microchip fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Přetaktování procesorů, operačních pamětí a grafických karet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-chart-line fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Test stability sytému, pomocí programů OCCT, Prime95, MSI Kombustor a AIDA64.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-database fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Vytvoření diskového pole RAID za účelem redundance či zálohování dat.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-brands fa-windows fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Instalace OS Windows 10/11, GNU/Linux, instalace ovladačů a software.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!---->
<!---->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-hard-drive fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Migrace OS či dat na jiný disk.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-droplet fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Delid Intel procesorů 3., 4., 5., 6., 7., 8. generace, aplikace tekutého kovu a přilepení IHS silikonem.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-syringe fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Přepastování procesorů a grafických karet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-water fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Vodní chlazení na míru (otevřený vodní okruh).</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-xl-3">-->
<!--            <div class="service_container">-->
<!--                <div class="row">-->
<!--                    <div class="col-3 d-flex justify-content-center align-items-center">-->
<!--                        <i class="fa-solid fa-money-bill-1 fs-1 text-center"></i>-->
<!--                    </div>-->
<!--                    <div class="col-9">-->
<!--                        <p class="mb-0">Cenu za mé služby vám v případě vašeho zájmu o mé služby napíšu do emailu či SMS.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>