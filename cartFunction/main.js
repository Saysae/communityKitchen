let shop = document.getElementById("shop");


let shopFunction =()=> {
    return  (shop.innerHTML = `<div class="item">
        <img src="../images/afghan.png" alt="afghan food" width="220">
        <div class="details">
            <h3>Afghan food</h3>
            <p>lorem ipsum dolor sit amet lorem convallis navbar et aliquet</p>
            <div class="price-qty">
            <h2>$12.59</h2>
            <div class="button">
                <i class="fa fa-minus"></i>
                <div class="qty">0</div>
                <i class="fa fa-plus"></i>
            </div>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="../images/afghan2.png" alt="afghan food" width="220">
        <div class="details">
            <h3>Afghan food</h3>
            <p>lorem ipsum dolor sit amet lorem convallis navbar et aliquet</p>
            <div class="price-qty">
            <h2>$25</h2>
            <div class="button">
                <i class="fa fa-minus"></i>
                <div class="qty">0</div>
                <i class="fa fa-plus"></i>
            </div>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="../images/asian.png" alt="afghan food" width="220">
        <div class="details">
            <h3>Asian food</h3>
            <p>lorem ipsum dolor sit amet lorem convallis navbar et aliquet</p>
            <div class="price-qty">
            <h2>$15</h2>
            <div class="button">
                <i class="fa fa-minus"></i>
                <div class="qty">0</div>
                <i class="fa fa-plus"></i>
            </div>
        </div>
    </div>
    </div>
    <div class="item">
        <img src="../images/afghan.png" alt="afghan food" width="220">
        <div class="details">
            <h3>Afghani food</h3>
            <p>lorem ipsum dolor sit amet lorem convallis navbar et aliquet</p>
            <div class="price-qty">
            <h2>$22.90</h2>
            <div class="button">
                <i class="fa fa-minus"></i>
                <div class="qty">0</div>
                <i class="fa fa-plus"></i>
            </div>
        </div>
    </div>`)
};

shopFunction();