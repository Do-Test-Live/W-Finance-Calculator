<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Finance Calculator</title>

    <script type="text/javascript">
        function calculate() {
            let rate = document.getElementById('monthly_flat').value;
            if (parseInt(rate) === 0) {
                rate = 2.8;
            }
            let a = document.getElementById('loan_amount').value;
            let b = document.getElementById('repayment_period').value;
            let c = parseInt(a) * (rate / 100);
            c = c + parseInt(a) / b;
            c = Math.round(c);
            document.getElementById('reference_repayment_amount').value = c;
        }
    </script>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <form method="post" action="insert.php">
                        <h1 class="mb-3">Apply for Loan</h1>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Chinese Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">English Name (must be the same as ID card) </label>
                                <input type="text" class="form-control" name="e_name" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Identification Number </label>
                                <input type="text" class="form-control" name="identy_num" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Date of Birth </label>
                                <input type="date" class="form-control" name="dob" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Contact Number </label>
                                <input type="text" class="form-control" name="contact_num" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Payment Method </label>
                                <select class="form-select" name="pay_method" required>
                                    <option selected>Choose..</option>
                                    <option value="Automatic transfer">Automatic transfer</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Cash">Cash</option>
                                    <option value="No income">No income</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Applicant Type</label>
                                <select class="form-select" name="applicant_type" required>
                                    <option selected>Choose..</option>
                                    <option value="New application client">New application client</option>
                                    <option value="Existing customers">Existing customers</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Loan Amount </label>
                                <input type="number" class="form-control" name="loan_amount" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Other Information </label>
                                <textarea class="form-control" rows="3" name="other_info" required></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">
                                        When I apply, I confirm that I am 18 years old or above, and I agree to the
                                        Money Lenders Ordinance and the Personal Information Collection Statement.
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-warning w-100" name="loanApply">Apply</button>
                            </div>
                            <div class="col-6">
                                <a href="index.php" class="btn btn-secondary w-100">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div>
                        <h1>Financial Calculator</h1>
                        <p>
                            We can even calculate the repayment amount for you.
                        </p>
                        <p>
                            We calculate it on a monthly flat basis. Fixed rate fixed book, at a glance!
                        </p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="loan_amount" class="form-label">Loan Amount <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="loan_amount" onkeyup="calculate()"
                                   onkeydown="calculate()">
                        </div>
                        <div class="mb-3">
                            <label for="repayment_period" class="form-label">Repayment Period <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="repayment_period" min="4" max="24"
                                   onkeyup="calculate()" onkeydown="calculate()">
                        </div>
                        <div class="mb-3">
                            <label for="monthly_flat" class="form-label">Monthly Flat %</label>
                            <input type="text" class="form-control" id="monthly_flat" onkeyup="calculate()"
                                   onkeydown="calculate()">
                        </div>
                        <div class="mb-3">
                            <label for="repayment_period" class="form-label">Reference repayment amount</label>
                            <input type="text" class="form-control" id="reference_repayment_amount" readonly>
                            <p>
                                <span class="text-danger">*</span> The interest rate displayed by the loan calculator is
                                for reference only, and all loan
                                application interest rates are subject to the final approval.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
