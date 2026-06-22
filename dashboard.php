<?php include 'includes/header.php'; ?>
<style>
.header-top{
    background: #0E0E0E;
}    
</style>
<!-- Section 1 Start -->
    <Section class="dash_s1">
        <div class="dash_c1">
            <div class="dash_s1left">
                <div class="dash_leftmain">
                    <div class="dash_s1titlebar">
                        <h3 class="dash_s1title">Welcome Back John Smith</h3>
                        <p class="dash_s1subtitle">Hello <b>John Smith</b> (not John Smith? <a href="#" class="dash_s1logout">Log out</a>)</p>
                    </div>
                    <p class="dash_s1subtitle">From your dashboard, update account info, password, billing and view past orders.</p>
                    <div class="dash_tabbtnbar">
                        <!-- Mobile Dropdown Button -->
                        <div class="mobile-tabs desktop_none position-relative">
                            <button class="tab-toggle-btn" id="tabToggle">
                                <span class="d-flex align-items-center gap-2">
                                    <img src="setting.svg" width="20">
                                    <span id="activeTabName">Account Details</span>
                                </span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>

                            <div class="mobile-tab-menu">
                                <button class="mobile-tab-item active"
                                        data-bs-toggle="tab"
                                        data-bs-target="#account">
                                    <img src="setting.svg" width="18"> Account Details
                                </button>

                                <button class="mobile-tab-item"
                                        data-bs-toggle="tab"
                                        data-bs-target="#billing">
                                    <img src="billing.svg" width="18"> Billing Details
                                </button>

                                <button class="mobile-tab-item"
                                        data-bs-toggle="tab"
                                        data-bs-target="#orders">
                                    <img src="history.svg" width="18"> Order History
                                </button>

                                <button class="mobile-tab-item"
                                        data-bs-toggle="tab"
                                        data-bs-target="#logout">
                                    <img src="logout.svg" width="18"> Sign Out
                                </button>
                            </div>
                        </div>


                        <!-- Desktop Tabs -->
                        <div class="nav desk_tabbtnmain mobile_none">
                            <button class="nav-link active desk_tabbtn" data-bs-toggle="tab" data-bs-target="#account">
                                Account Details
                            </button>

                            <button class="nav-link desk_tabbtn" data-bs-toggle="tab" data-bs-target="#billing">
                                Billing Details
                            </button>

                            <button class="nav-link desk_tabbtn" data-bs-toggle="tab" data-bs-target="#orders">
                                Order History
                            </button>

                            <button class="nav-link desk_tabbtn" data-bs-toggle="tab" data-bs-target="#logout">
                                Sign Out
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Overlay -->
            <div class="menu-overlay"></div>

            <div class="dash_s1right">
                <!-- Tab Contents -->
                <div class="tab-content mt-4">

                    <div class="tab-pane fade show active" id="account">
                        Account Content
                    </div>

                    <div class="tab-pane fade" id="billing">
                        Billing Content
                    </div>

                    <div class="tab-pane fade" id="orders">
                        Order History Content
                    </div>

                    <div class="tab-pane fade" id="logout">
                        Logout Content
                    </div>
                </div>
            </div>
        </div>
    </Section>
<!-- Section 1 Start -->

<?php include 'includes/footer.php'; ?>
<script>
    const toggleBtn = document.querySelector("#tabToggle");
    const menu = document.querySelector(".mobile-tab-menu");
    const overlay = document.querySelector(".menu-overlay");
    const activeName = document.querySelector("#activeTabName");

    toggleBtn.addEventListener("click", ()=>{

        menu.classList.toggle("show");
        overlay.classList.toggle("show");

        toggleBtn.querySelector("i").classList.toggle("fa-chevron-down");
        toggleBtn.querySelector("i").classList.toggle("fa-chevron-up");

    });


    overlay.addEventListener("click", ()=>{

        menu.classList.remove("show");
        overlay.classList.remove("show");

        toggleBtn.querySelector("i").classList.remove("fa-chevron-up");
        toggleBtn.querySelector("i").classList.add("fa-chevron-down");

    });


    document.querySelectorAll(".mobile-tab-item").forEach(item => {

        item.addEventListener("click", function () {

            // Update dropdown title
            activeName.innerText = this.innerText;

            // Close menu
            menu.classList.remove("show");
            overlay.classList.remove("show");

            toggleBtn.querySelector("i").classList.remove("fa-chevron-up");
            toggleBtn.querySelector("i").classList.add("fa-chevron-down");

            // Trigger Bootstrap tab
            const target = this.getAttribute("data-bs-target");

            const tabTrigger = document.querySelector(
                `.nav-link[data-bs-target="${target}"]`
            );

            if (tabTrigger) {
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();
            }

        });

    });
</script>