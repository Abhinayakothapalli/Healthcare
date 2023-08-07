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
                        Niramaya Health Insurance
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
                                    Niramaya Health Insurance scheme was conceived to provide affordable health insurance to people with disabilities, such as Autism, Cerebral Palsy, Mental Retardation and Multiple Disabilities

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        <ul>
                                            <li> Copy of Niramaya card or mention Health ID No </li>
                                            <li>Self-Attested copy of Disability Certificate.</li>
                                            <li>All original prescription papers given by the doctor. </li>
                                            <li>All reports in Original</li>
                
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
                    Swavlamban Health Insurance
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
                                            <li>aged between 18 years and 65 years and with a parental annual income less than Three Laks (Rs. 3, 00,000/- P.A are eligible for this scheme.</li>
                                            <li>The scheme offers comprehensive coverage to the beneficiary and his family - spouse of the PwD and 2 children.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        <ul>
                                            <li> Aadhar card</li>
                                            <li>voter ID</li>
                                            <li>driving license</li>
                                            <li>2 passport size photos</li>
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