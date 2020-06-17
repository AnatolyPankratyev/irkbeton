<section class="calculate">
    <div class="container">
        <h1>Рассчитайте стоимость</h1>
        <div class="row">
            <div class="col-lg-6 order-sm-2 order-lg-1">
                <div class="form-group">
                    <label for="mark">Выберите марку бетона</label>
                    <select name="mark" id="mark" class="form-control" required>
                        <option value="" selected>Выберите марку бетона</option>
                        <option value="100">M100 (B 7.5)</option>
                        <option value="150">M150 (B 12.5)</option>
                        <option value="200">M200 (B 15)</option>
                        <option value="250">M250 (B 20)</option>
                        <option value="300">M300 (B 22.5)</option>
                        <option value="350">M350 (B 25)</option>
                        <option value="400">M400 (B 30)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fluid">Выберите подвижность бетона</label>
                    <select name="fluid" id="fluid" class="form-control" required>
                        <option value="" selected>Выберите подвижность бетона</option>
                        <option value="10">П2 о.к. 5-9</option>
                        <option value="20">П3 о.к. 10-15</option>
                        <option value="30">П4 о.к. 16-20</option>
                        <option value="40">Пескобетон</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="size">Укажите объем или размеры</label>
                    <select name="size" id="size" class="form-control" required>
                        <option value="" selected>Выберите вариант</option>
                        <option value="1">Указать объем</option>
                        <option value="2">Указать размеры</option>
                    </select>
                </div>
                <div class="calculate-size hide-calc">
                    <div class="form-group col-6">
                        <label for="length">Длина (м)</label>
                        <input name="length" type="number" id="length" class="form-control" placeholder="Введите длину">
                    </div>
                    <div class="form-group col-6">
                        <label for="width">Ширина (м)</label>
                        <input name="width" type="number" id="width" class="form-control" placeholder="Введите ширину">
                    </div>
                    <div class="form-group col-6">
                        <label for="height">Высота (м)</label>
                        <input name="height" type="number" id="height" class="form-control" placeholder="Введите высоту">
                    </div>
                </div>
                <div class="calculate-value hide-calc">
                    <div class="form-group col-6">
                        <label for="value">Объем (м)</label>
                        <input name="value" type="number" id="value" class="form-control" placeholder="Введите объем">
                    </div>
                </div>
                <div class="delivery-block hide-calc">
                    <div class="form-group">
                        <label for="delivery">Нужна ли вам доставка?</label>
                        <select name="delivery" id="delivery" class="form-control">
                            <option selected value="1">Да, нужна</option>
                            <option value="0">Нет, не нужна</option>
                        </select>
                    </div>
                    <div class="form-group delivery-length">
                        <label for="delivery_var">Как делако доставлять?</label>
                        <select name="delivery_var" id="delivery_var" class="form-control">
                            <option selected value="15">До 15 километров за город</option>
                            <option value="20">15 - 20 километров</option>
                            <option value="25">20 - 25 километров</option>
                        </select>
                    </div>
                </div>

                <button class="btn mb-4 ml-3 calculate-btn hide-calc">Посчитать</button>
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Общий объем: </td>
                        <td class="font-weight-bold text-center calculated-value">0</td>
                        <td class="text-right">куб.м.</td>
                    </tr>
                    <tr>
                        <td>Стоимость бетона: </td>
                        <td class="font-weight-bold text-center calculated-rubs">0</td>
                        <td class="text-right">руб.</td>
                    </tr>
                    <tr>
                        <td>Стоимость доставки: </td>
                        <td class="font-weight-bold text-center calculated-delivery">0</td>
                        <td class="text-right">руб.</td>
                    </tr>
                    <tr>
                        <th>Общая стоимость: </th>
                        <td class="font-weight-bold text-center calculated-total">0</td>
                        <th class="text-right">руб.</th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 order-sm-1 order-lg-2 calculate-how-to-use">
                <h4>Как пользоваться калькулятором</h4>
                <ul>
                    <li>Выбреите марку бетона</li>
                    <li>Выбреите подвижность бетона</li>
                    <li>Выберите вариант того, что вы хотите указать:
                        <ul>
                            <li>Сразу ввести объем</li>
                            <li>Или ввести длину, ширину и высоту</li>
                        </ul>
                    </li>
                    <li>Введите необходимые показатели</li>
                    <li>Выберите, нужна ли вам доставка</li>
                    <li>Выберите расстояние доставки</li>
                    <li>Нажмите на кнопку "Посчитать"</li>
                    <li>Результат появится в таблице ниже</li>
                </ul>
            </div>
        </div>
        <hr>
        <button class="btn btn-block" data-toggle="modal" data-target="#modal-callback">Получить предложение</button>
    </div>
</section>