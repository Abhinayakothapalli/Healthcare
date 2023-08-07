<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINSURANCE</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <style>
        #maps {
            height: 5px;
        }
    </style>
</head>
<nav>
    <div class="icon">Health <b style="color: red;">C</b>are</div>
    <div class="search_box">
        <input type="search" placeholder="search here">
        <span class="fa fa-search"></span>
    </div>
</nav>

<body>

    <div class="c">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Aam Aadmi Bima Yojana
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1"
                                role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Eligibility Criteria</a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2"
                                role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Documentation required</a>
                            <button type="button" class="btn btn-primary">near by hospitals<a
                                    href="https://www.google.com/maps/search/near+by+hospital/@17.3669444,78.4072313,14z/data=!3m1!4b1"><i
                                        class='fas fa-map-marker-alt' id="maps"
                                        style='font-size:25px;color:red;padding-left:5px'></i></a></button>


                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        <ul>
                                            <li>People aged between 18 years and 59 years</li>
                                            <li>People belonging to Below Poverty Line (BPL), families slightly above BPL who are a part of the vocational group as specified in the policy, and those belonging to rural landless household</li>
                                            <li>One member of the family who is the breadwinner is eligible for coverage.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        <ul>
                                            <li>Address proof</li>
                                            <li>Nominee application form</li>
                                            <li>Income certificate</li>
                                            <li>Application form</li>
                
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        CGHs
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Eligibility Criteria</a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Documents Required</a>
                            <button type="button" class="btn btn-primary">near by hospitals<a href="https://www.google.com/maps/search/near+by+hospital/@17.3669444,78.4072313,14z/data=!3m1!4b1"><i class='fas fa-map-marker-alt' id="maps" style='font-size:25px;color:red;padding-left:5px'></i></a></button>


                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        <ul>
                                            <li>Every Central Government employee (except Delhi administration and railways), including their dependant family members residing in the CGHS covered areas.</li>
                                            <li>Central Government pensioners (except pensioners belonging to armed forces and railways) and their families.</li>
                                            <li>Pensioners of the Central Government retiring with the contributory provident fund benefits and their families.</li>
                                            <li>Widows of the Central Government pensioners.</li>
                                            <li>Railway board employees.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        <ul>
                                            <li>Address proof of the pensioner and their dependants.</li>
                                            <li>Photographs of the beneficiary family members.</li>
                                            <li>Age proof of the pensioners dependant.</li>
                                            <li>Surrender certificate if the pensioner has an active CGHS card.</li>
                                            <li>Attested copies of the last pay certificate.</li>
                                            <li>Demand draft for the required amount towards the CGHS contribution.</li>
                                            <li>Provisional card if PPO is not provided.</li>
                                           
                                        </ul>
                                         <p>Apply</p>
                                         <a href="">https://www.cghs.nic.in/</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Ayushman Bharat Scheme
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Eligibility Criteria</a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Documents Required</a>
                            <button type="button" class="btn btn-primary">near by hospitals<a href="https://www.google.com/maps/search/near+by+hospital/@17.3669444,78.4072313,14z/data=!3m1!4b1"><i class='fas fa-map-marker-alt' id="maps" style='font-size:25px;color:red;padding-left:5px'></i></a></button>


                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        <ul>
                                            <li>Families with no individuals aged between 16 and 59 years.</li>
                                            <li>Families having at least one physically challenged member and no able-bodied adult member. </li>
                                            <li>Landless households who make a living by working as casual manual labourers</li>
                                            <li>Primitive tribal communities.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        <ul>
                                            
                                            <li>Age & Identity Proof (Aadhaar Card/PAN Card)</li>
                                            <li>Caste certificate</li>
                                            <li>Income certificate (maximum annual income to be only up to Rs. </li>
                                            <li>Document proof the current status of the family to be covered (Joint or nuclear)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>