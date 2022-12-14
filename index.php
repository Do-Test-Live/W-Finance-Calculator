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
                        <h1 class="mb-3">即時申請</h1>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">中文姓名</label>
                                <input type="text" class="form-control" name="c_name" placeholder="黃金強" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">英文姓名(須與身份証相同)</label>
                                <input type="text" class="form-control" name="e_name" placeholder="Wong Kam Keung" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">身份証號碼 </label>
                                <input type="text" class="form-control" name="identy_num" placeholder="A1234xx(x)" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">出生日期 (YYYY-MM-DD) </label>
                                <input type="text" class="form-control" name="dob" placeholder="1980-12-20" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">聯絡電話</label>
                                <input type="text" class="form-control" name="contact_num" placeholder="98880888" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">出糧方式</label>
                                <select class="form-select" name="pay_method" required>
                                    <option selected>Choose..</option>
                                    <option value="Automatic transfer">自動轉賬</option>
                                    <option value="Cheque">支票</option>
                                    <option value="Cash">現金</option>
                                    <option value="No income">沒有收入</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">申請人</label>
                                <select class="form-select" name="applicant_type" required>
                                    <option selected>Choose..</option>
                                    <option value="New application client">新申請客戶</option>
                                    <option value="Existing customers">現有客戶</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">貸款額度 (HK$)</label>
                                <input type="number" class="form-control" name="loan_amount" placeholder="100000" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">其他資料</label>
                                <textarea class="form-control" rows="3" name="other_info" placeholder="如指定聯絡時間" required></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">
                                        本人申請時確認年滿18歲或以上，同意放債人條例及個人資料收集聲明。
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-warning w-100" name="loanApply">立即申請</button>
                            </div>
                            <div class="col-6">
                                <a href="index.php" class="btn btn-secondary w-100">重置</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div>
                        <h1>理財計算機</h1>
                        <p>
                            我們可即使為你計算出還款額度。
                        </p>
                        <p>
                            我們以月平息計算。定息定本，一目了然！
                        </p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="loan_amount" class="form-label">貸款額 <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="loan_amount" placeholder="HK$10,000" onkeyup="calculate()"
                                   onkeydown="calculate()">
                        </div>
                        <div class="mb-3">
                            <label for="repayment_period" class="form-label">還款期數 <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="repayment_period" min="4" max="24"
                                   onkeyup="calculate()" onkeydown="calculate()" placeholder="12">
                        </div>
                        <div class="mb-3">
                            <label for="monthly_flat" class="form-label">月平息 %</label>
                            <input type="text" class="form-control" id="monthly_flat" onkeyup="calculate()"
                                   onkeydown="calculate()" placeholder="2.8">
                        </div>
                        <div class="mb-3">
                            <label for="repayment_period" class="form-label">參考還款額</label>
                            <input type="text" class="form-control" id="reference_repayment_amount" placeholder="HK$1113" readonly>
                            <p>
                                <span class="text-danger">*</span> 貸款計算機所顯示之利率僅供參考，一切貸款申請利率均以最後批核為準。
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
