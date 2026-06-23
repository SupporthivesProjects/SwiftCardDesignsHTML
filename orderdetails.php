<?php include 'includes/header.php'; ?>

<section class="detail_s1">
        <div class="detail_s1top">
            <h2 class="order_modalid">Order: #1234567</h2>
            <div class="d-flex order-status">
                <div class="status_card">
                    <img src="./img/status1.png">
                    <p>Order Placed</p>
                </div>
                <div class="status_card">
                    <img src="./img/status2.png">
                    <p>On Review</p>
                </div>
                <div class="status_card">
                    <img src="./img/status3.png">
                    <p>Pending</p>
                </div>
                <div class="status_card active">
                    <img src="./img/status4.png">
                    <p>Delivered</p>
                </div>
            </div>
            <button type="button" class="btn detail_backbtn"><img src="./img/detailsback.svg"></button>
        </div>
        <div class="detail_s1bottom">
            <div class="details_s1bottomtop">
                <div class="desktop_none">
                    <p class="table_swipetext"><img src="./img/swipedot.png">Swipe to view table</p>
                </div>
                <!-- Purchase Overview -->
                <div class="modal_table1 table-responsive modal_table1_scroll">
                    <div class="card order-card">
                        <div class="card-header">
                            Purchase Overview
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0 modal_table1inner">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-end">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Learning Gutenberg</td>
                                        <td class="text-center">Video</td>
                                        <td class="text-center">1</td>
                                        <td class="text-end">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Learning Gutenberg - Video</td>
                                        <td class="text-center">Video</td>
                                        <td class="text-center">2</td>
                                        <td class="text-end">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Learning Gutenberg - Video</td>
                                        <td class="text-center">Video</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">$100.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail_s1bottombottom">
                <!-- Order Amount -->
                <div class="modal_table2">
                    <div class="card order-card">
                        <div class="card-header">
                            Order Amount
                        </div>
                        <div class="card-body">
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Subtotal</p>
                                <p class="modal_table2subtitle">$10.00</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">VAT</p>
                                <p class="modal_table2subtitle">0.00</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Discount</p>
                                <p class="modal_table2subtitle">0.00</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Total Paid</p>
                                <p class="modal_table2subtitle">$10.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Order Information -->
                <div class="modal_table3">
                    <div class="card order-card">
                        <div class="card-header">
                            Order Information
                        </div>
                        <div class="card-body">
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Order #:</p>
                                <p class="modal_table2subtitle">0000000</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Order Date:</p>
                                <p class="modal_table2subtitle">01-01-2025 00:00 AM</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Payment Status:</p>
                                <p class="modal_table2subtitle">Paid</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Total Paid:</p>
                                <p class="modal_table2subtitle">$400.00</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Payment Method:</p>
                                <p class="modal_table2subtitle">Debit/Credit Card</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Billing Information -->
                <div class="modal_table4">
                    <div class="card order-card">
                        <div class="card-header">
                            Billing Information
                        </div>
                        <div class="card-body">
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Name:</p>
                                <p class="modal_table2subtitle">John Smith</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Email:</p>
                                <p class="modal_table2subtitle">Johnsmith@gmail.com</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Phone:</p>
                                <p class="modal_table2subtitle">+00 123 456 789</p>
                            </div>
                            <div class="modal_table2innerbody">
                                <p class="modal_table2title">Address</p>
                                <p class="modal_table2subtitle">
                                    123 Street,<br>
                                    Address line 1<br>
                                    USA, 123 ABC
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php include 'includes/footer.php'; ?>