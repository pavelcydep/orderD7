<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var customOrderComponent $component */

?>
<div class="row row-oform">
     <div class="col-20 col-lg-15 col-xl-16 mb-3 mb-lg-0">
        <div class="white-block">
            <form method="$_POST">
           <h3 class="mb-4">Информация о покупателе</h3>
           <input type="hidden" id="person_type" name="person_type" value="1">
           <input type="hidden" id="payment_kvitance" name="payment_kvitance">
           <input type="hidden" id="person_numb_zakaz" name="person_numb_zakaz" value="259">
           <div class="row">
              <div class="col-20">
                 <div class="toggler persons" data-items="#person-info,#company-info,#payment54,#payment55,#payment56">
                    <div id="toggler-person" class="toggler-item toggler-item1 person active"  onclick="person();" data-items="#person-info,#payment54,#payment55,#payment56">
                       <input id="toggler-person" class="inp" type="radio" id="payer_type" name="payer_type" value="1">Физическое лицо
                    </div>
                    <label id="toggler-person2" class="toggler-item toggler-item2 person"  onclick="person2();" data-items="#person-info,#company-info,#payment56">
                    <input id="toggler-person2" type="radio" name="payer_type" value="2">Юридическое лицо
                    </label>
                 </div>
              </div>
              <div class="col-20 col-lg-10 pr-xl-5 d-none" id="company-info">
                 <div class="form-group mb-4">
                    <label>Название организации *</label>
                    <input type="text" class="form-control form-control-lg company_name" name="company_name" placeholder="Введите название организации или ИНН" value="">
                 </div>
                 <div class="form-group mb-4">
                    <label>ИНН организации</label>
                    <input type="text" class="form-control form-control-lg inn" name="inn" placeholder="" value="">
                 </div>
                 <div class="form-group mb-4">
                    <label>КПП организации <span>(для ИП необязательно)</span></label>
                    <input type="text" class="form-control form-control-lg kpp" name="kpp" placeholder="" value="">
                 </div>
                 <div class="form-group mb-4">
                    <label>Карта партнера <span>(Вы можете загрузить карту партнера, чтобы не заполнять поля выше. Менеджер свяжется с вами и выставит счет)</span></label>
                    <div class="custom-file custom-file-lg">
                       <input type="file" class="form-control-file form-control-lg custom-file-input" name="partner_card">
                       <label class="custom-file-label">
                          <i class="icon-svg">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.988 511.988">
                                <path d="M490.305 186.463c-8.354-8.309-21.861-8.272-30.17.081L203.687 444.379c-33.271 33.271-87.308 33.271-120.641-.045-33.308-33.325-33.308-87.362.004-120.674L347.089 58.234c20.772-20.771 54.543-20.771 75.375.045 20.826 20.826 20.826 54.593-.005 75.425l-218.732 218.73-.04.044c-8.333 8.287-21.8 8.276-30.116-.04-8.33-8.33-8.33-21.831 0-30.161l105.58-105.602c8.33-8.332 8.329-21.84-.003-30.17-8.332-8.33-21.84-8.329-30.17.003l-105.579 105.6c-24.991 24.991-24.991 65.507.002 90.499 24.992 24.992 65.508 24.992 90.501 0 .029-.029.052-.06.08-.089l218.646-218.646c37.494-37.494 37.494-98.276 0-135.77-37.499-37.472-98.277-37.472-135.749 0L52.84 293.53c-49.934 49.934-49.934 130.979.036 180.974 50.003 49.977 131.049 49.977 181.022.004l256.489-257.875c8.308-8.354 8.271-21.861-.082-30.17z" />
                             </svg>
                          </i>
                          Выбрать файл
                       </label>
                    </div>
                 </div>
              </div>
              <div class="col-20 col-lg-10" id="person-info">
                 <div class="form-group mb-4">
                    <label>ФИО контактного лица *</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Введите ФИО" name="name" value="">
                 </div>
                 <div class="form-group mb-4">
                    <label>Номер телефона для связи *</label>
                    <input type="text" class="form-control form-control-lg input-mask-phone" name="phone" onmousemove="addPlaceholder()" value="">
                 </div>
                 <div class="form-group form-group-email" style="margin-bottom:0">
                    <label>Ваш E-mail <span></span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Адрес электронной почты" name="email" value="">
                 </div>
                 <div class="form-check form-check-slide" style="display:none">
                    <label>&nbsp;</label>
                    <input class="form-check-input" type="checkbox" name="reg_check" id="reg_check">
                    <label class="form-check-label" for="reg_check">
                       Зарегистрироваться на сайте
                       <i class="icon-svg icon-question" data-toggle="tooltip" data-placement="bottom" title="Зарегистируйтесь, чтобы отслеживать статус заказа и получать информация о скидках и бонусах.">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                             <path d="M437.02 74.98C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.98C26.629 123.333 0 187.62 0 256c0 45.105 11.836 89.231 34.286 128.041L0 512l127.959-34.286C166.769 500.164 210.895 512 256 512c68.38 0 132.667-26.629 181.02-74.98C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.98-181.02zM271 383.5h-30v-30h30v30zm40.892-130.002L271 299.229V323.5h-30v-35.729l48.533-54.276A44.909 44.909 0 00301 203.5c0-24.813-20.187-45-45-45s-45 20.187-45 45h-30c0-41.355 33.645-75 75-75s75 33.645 75 75a74.872 74.872 0 01-19.108 49.998z" />
                          </svg>
                       </i>
                    </label>
                 </div>
              </div>
           </div>
        </div>
        <div class="white-block">
           <h3 class="mb-4">Доставка</h3>
           <div class="toggler delivery_id" data-items="#delivery, #delivery_address, #pickup">
              <label class="toggler-item active" onClick="delivery2();" id="delivery_id" data-items="#pickup">
              <input type="radio" value="1" name="delivery_id">
              Самовывоз из магазина
              </label>
              <label id="delivery_id" class="toggler-item" onclick="delivery();" data-items="#delivery_address, #delivery">
              <input type="radio" value="2" name="delivery_id">
              Доставка транспортной компанией
              </label>
           </div>
           <div class="form-group mb-4" id="pickup">
              <div class="pickup_address">
                 <div class="pickup_address__title">
                    г. Казань, Оренбургский тракт, 160
                    <div class="pickup_address__info">Самовывоз из магазина</div>
                 </div>
              </div>
           </div>
           <div class="form-group mb-4 d-none" id="delivery-pickup">
              <label>Адрес доставки <span>(доставим в ближайший пункт выдачи к указанному адресу)</span></label>
              <div class="address">
                 <input type="text" class="form-control form-control-lg" name="address" placeholder="Введите адрес полностью (Город, Улица, Дом, Квартира)">
                 <div class="address_suggestions"></div>
              </div>
           </div>
           <div class="form-group mb-4 d-none" id="delivery">
              <label>Выберите способ доставки:</label>
              <div id="load"></div>
              <div class="delivery-select">
              </div>
              <div class="delivery_points">
                 <select name="delivery_point" class="delivPoints"></select> <!-- important, do not remove -->
                 <div class="map" id="deliv_points_map"></div>
              </div>
           </div>
        </div>
        <div class="white-block">
           <h3 class="mb-4">Способ оплаты</h3>
           <div class="payment-select">
              <div class="row">
                 <label class="col-lg-10" id="pay_1" onclick="rassr();" >
                    <div class="payment-select__item payment-select__item-rasr"  onclick="payment1()"   id="payment1">
                       <input type="radio" name="payment_method" value="1">
                       <div class="payment-select__logo">
                          <img src="./images/rasrochka.png">
                       </div>
                       <div class="payment-select__title">
                          Оформить рассрочку
                          <b id="month_id"  >на 3 месяца</b>
                       </div>
                       
                    </div>
                    <div class="payment-select__list d-none" id="list" >
                       <div class="form_radio_rasr">
                          <input id="radio-rasr-3" onclick="monthToggle();" type="radio" name="payment_rasr" value="3" checked>
                 <label id="radio-3" onclick="noactive();"  for="radio-rasr-3">на 3 месяца</label>
                 </div>
                 <div class="form_radio_rasr">
                 <input id="radio-rasr-6"  onclick="monthToggle();" type="radio" id="payment_rasr" name="payment_rasr" value="6">
                 <label for="radio-rasr-6">на 6 месяцев</label>
                 </div>
                 </div>
                 </label>
                 <label class="col-lg-10" id="pay_2">
                    <div class="payment-select__item payment-select__item-rasr" onclick="payment2()" id="payment2">
                       <input type="radio" name="payment_id" value="2">
                       <div class="payment-select__logo">
                          <img src="./images/beznal.png">
                       </div>
                       <div class="payment-select__title">
                          Безналичный расчет
                       </div>
                       <div class="vipad-list"></div>
                    </div>
                 </label>
                 <label class="col-lg-10" id="pay_3">
                    <div class="payment-select__item payment-select__item-rasr"  onclick="payment3()" id="payment3">
                       <input type="radio" name="payment_id" value="3">
                       <div class="payment-select__logo">
                          <img src="./images/payonline.png">
                       </div>
                       <div class="payment-select__title">
                          Оплатить онлайн
                       </div>
                       <div class="vipad-list"></div>
                    </div>
                 </label>
                 <label class="col-lg-10" id="pay_4">
                    <div class="payment-select__item payment-select__item-rasr"  onclick="payment4()" id="payment4">
                       <input type="radio" name="payment_id" value="4">
                       <div class="payment-select__logo">
                          <img src="./images/pay.png">
                       </div>
                       <div class="payment-select__title">
                          Оплата при получение
                       </div>
                       <div class="vipad-list"></div>
                    </div>
                 </label>
              </div>
           </div>
        </div>
     </div>
     <div class="col-20 col-lg-5 col-xl-4">
        <div class="sticky-top">
           <div class="cheque">
              <div class="cheque-item">
                 Товара: <span class="cheque-price"><?= \SaleFormatCurrency(
							$item->getQuantity() * $item->getPrice(), 
							$item->getCurrency()
					) ?><span class="total-base-price"></span> </span>
              </div>
              <div class="cheque-item">
                 Скидка: <span class="cheque-price text-danger del3">-<span class="total-discount-price"></span> </span>
              </div>
              <div class="cheque-dash"></div>
              <div class="cheque-item cheque-item-deliv">
                 Доставка: <span class="cheque-price del4" style="display:none;"> <span class="delivery_price"></span> </span>
              </div>
              <div class="cheque-dash cheque-dash-deliv"></div>
              <div class="cheque-item">
                 Итого: <span class="cheque-price cheque-price_big"><span class="total-price"></span> </span>
              </div>
              <button id="pay" class="btn btn-danger w-100 pay">
              Заказать
              </button>
</form>
           </div>
           <div class="cheque-info mb-5">Отправляя заказ вы даёте <a href="/politika/" target="_blank">согласие на обработку персональных данных</a>, а также соглашаетесь с условиями <a href="/oferta/" target="_blank">договора оферты</a></div>
           <div class="question">
              <div class="question-title">Появились вопросы?</div>
              <div class="question-text">Если у вас возникли вопросы по оформлению заказа напишите нам <a href="mailto:info@airoterm.ru">info@airoterm.ru</a> или позвоните по телефону</div>
              <a class="font-weight-bold" href="#">88006006640</a>
           </div>
        </div>
     </div>
  </div>
  </div>
  </section>
  <div class="errors_container"></div>
