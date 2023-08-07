<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINSURANCE</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Ran
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Toggle first element</a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</a>
                            <button type="button" class="btn btn-primary">near by hospitals<a href="https://www.google.com/maps/search/near+by+hospital/@17.3669444,78.4072313,14z/data=!3m1!4b1"><i class='fas fa-map-marker-alt' id="maps" style='font-size:25px;color:red;padding-left:5px'></i></a></button>


                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                    Only those having annual family income up to Rs. 1.25 lakhs and below are eligible for financial assistance under the scheme. Financial assistance for eligible patients is released to treating hospitals. There is no State/UT-wise/District-wise allocation of funds under RAN scheme

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                    <ul>
                                            <li>Application form in prescribed proforma duly signed by the treating doctor and countersigned by the Medical Superintendent of the Government hospital/institute.</li>
                                            <li>Copy of the income certificate. </li>
                                            <li>Copy of the ration card.</li>
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
                        Kasturba poshan sahay yojana
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Toggle first element</a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</a>
                            <button type="button" class="btn btn-primary">near by hospitals<a href="https://www.google.com/maps/search/near+by+hospital/@17.3669444,78.4072313,14z/data=!3m1!4b1"><i class='fas fa-map-marker-alt' id="maps" style='font-size:25px;color:red;padding-left:5px'></i></a></button>


                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        
                                    All the females and their children below the age of 21 years belonging to the families having an annual income below Rs. 1.20 Lakh perannum
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                    <ul>
                                            <li>Adhar card Or pancard Income certificate Caste certificate</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>