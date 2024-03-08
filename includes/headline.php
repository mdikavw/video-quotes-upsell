<div class="w-100 text-bg-dark text-center py-5 px-2 px-lg-5">
    <div class="container-lg d-flex flex-column align-items-center gap-4">
        <h4>
            <em>Upgrade to the <span class="text-warning">"EXTENDED Pack"</span></em>
        </h4>
        <h1 class="display-1 fw-bold">
            DOUBLE Your Package by Grabing This Fabulous Upgrade Pack with <span class="text-warning">"Un-Restricted"
                PLR
                License</span> to Make You Able to
            Double The Profits Without Any Restriction!!
        </h1>
        <div class="text-bg-warning px-4 py-2 rounded-4 d-inline-block">
            <h6>You'll Receive Extended PLR License for Both Main Product + This Upgrade Pack</h6>
        </div>
        <img src="https://via.placeholder.com/600x800/FFC107" alt="" class="rounded-4">
        <div class="row justify-content-between g-4">
            <?php
                $texts = array(
                    "BIGGER Content Collection",
                    "PLR Right For FE + Upgrade Pack",
                    "Complete Re-Selling Toolkits",
                    "UNLIMITED Clients Services",
                    "Editable Design Templates",
                    "Easy To Edit & Customize",
                    "Zero Design Skill Needed",
                    "Save Time, Money, & Effort"
                );
                
                foreach ($texts as $text) {
                    echo "<div class='col-12 col-md-6'>
                        <div class='row text-bg-light rounded-5 px-4 py-3 mx-1 d-flex justify-content-center align-items-center'>
                            <i class='col-1 fa-regular fa-circle-check fw-bold fs-3'></i>
                            <strong class='col-10'>$text</strong>
                            <div class='col-1'></div>
                        </div>
                    </div>";
                }
            ?>
        </div>
        <?php include 'cta.php'?>
    </div>
</div>