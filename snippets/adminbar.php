<?php 
    $user = $kirby->user();
    if($user && $user->role()->name() == 'admin' || $user && $user->role()->name() == 'editor'): 
?>

    <?= css('/media/plugins/hectorromo/adminbar/index.css'); ?>
    
    <div id="adminbar">
        <div class="panel">

            <span><strong>Page:</strong> <?= $page->title(); ?></span>
            
            <a class="Button Button--xSmall" href="<?= $page->panelUrl(); ?>">Edit page</a>

            <a href="#" class="adminbar-close">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Stockholm-icons-48x48" transform="translate(-892.000000, -10144.000000)" fill="#FFFFFF">
                            <g id="Navigation" transform="translate(120.000000, 9836.000000)">
                                <g id="Stockholm-icons-/-Navigation-/-Close" transform="translate(760.000000, 296.000000)">
                                    <g id="Group" transform="translate(24.000000, 24.000000) rotate(-45.000000) translate(-24.000000, -24.000000) translate(8.000000, 8.000000)">
                                        <rect id="Rectangle-185" x="0" y="14" width="32" height="4" rx="2"></rect>
                                        <rect id="Rectangle-185-Copy" opacity="0.439999998" transform="translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000) " x="0" y="14" width="32" height="4" rx="2"></rect>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <button class="trigger">
            <svg version="1.1" id="Edit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                <path d="M17.561,2.439c-1.442-1.443-2.525-1.227-2.525-1.227L8.984,7.264L2.21,14.037L1.2,18.799l4.763-1.01l6.774-6.771
                l6.052-6.052C18.788,4.966,19.005,3.883,17.561,2.439z M5.68,17.217l-1.624,0.35c-0.156-0.293-0.345-0.586-0.69-0.932
                c-0.346-0.346-0.639-0.533-0.932-0.691l0.35-1.623l0.47-0.469c0,0,0.883,0.018,1.881,1.016c0.997,0.996,1.016,1.881,1.016,1.881
                L5.68,17.217z"/>
            </svg>
        </button>
    </div>
    
    <?= js('/media/plugins/hectorromo/adminbar/index.js'); ?>
    
<?php endif ?>