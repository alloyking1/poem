(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SinglePost.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      content: {}
    };
  },
  mounted: function mounted() {
    var id = this.$route.params.postId;
    this.fetPost(id);
  },
  methods: {
    fetPost: function fetPost(id) {
      var _this = this;

      axios__WEBPACK_IMPORTED_MODULE_0___default.a.get("api/user/category/single/post/".concat(id)).then(function (res) {
        _this.content = res.data;
        console.log(res);
      });
    },
    like: function like() {
      alert('good');
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css&":
/*!****************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css& ***!
  \****************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.container-pad[data-v-6961d49a]{\n    padding-top:0;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css&":
/*!********************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css& ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=template&id=6961d49a&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SinglePost.vue?vue&type=template&id=6961d49a&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "wrapper container-pad" }, [
      _c(
        "section",
        { staticClass: "section-profile-cover section-shaped my-0" },
        [
          _c("div", { staticClass: "section section-hero section-shaped" }, [
            _vm._m(0),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "separator separator-bottom separator-skew zindex-100"
              },
              [
                _c(
                  "svg",
                  {
                    attrs: {
                      x: "0",
                      y: "0",
                      viewBox: "0 0 2560 100",
                      preserveAspectRatio: "none",
                      version: "1.1",
                      xmlns: "http://www.w3.org/2000/svg"
                    }
                  },
                  [
                    _c("polygon", {
                      staticClass: "fill-white",
                      attrs: { points: "2560 0 2560 100 0 100" }
                    })
                  ]
                )
              ]
            )
          ])
        ]
      ),
      _vm._v(" "),
      _c("section", { staticClass: "section bg-secondary" }, [
        _c("div", { staticClass: "container" }, [
          _c("div", { staticClass: "card card-profile shadow mt--300" }, [
            _c("div", { staticClass: "px-4" }, [
              _c("div", { staticClass: "text-center mt-5" }, [
                _c("h3", [_vm._v(_vm._s(this.content.title))]),
                _vm._v(" "),
                _c("div", { staticClass: "h6 font-weight-300" }, [
                  _c("i", { staticClass: "ni location_pin mr-2" }),
                  _vm._v(_vm._s(this.content.poem_writer.name))
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "mt-5 py-5 border-top text-center" }, [
                _c("div", { staticClass: "row justify-content-center" }, [
                  _c("div", { staticClass: "col-lg-9" }, [
                    _c("p", [
                      _vm._v(
                        "\n                                " +
                          _vm._s(this.content.content) +
                          "\n                            "
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("hr"),
                _vm._v(" "),
                _c("div", { staticClass: "row" }, [
                  _c(
                    "div",
                    {
                      staticClass:
                        "col-lg-4 order-lg-3 text-lg-right align-self-lg-center"
                    },
                    [
                      _c("div", {}, [
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-primary btn-neutral",
                            on: {
                              click: function($event) {
                                return _vm.like()
                              }
                            }
                          },
                          [_vm._v("like")]
                        ),
                        _vm._v(" "),
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-default",
                            attrs: { type: "button" }
                          },
                          [_vm._v("comment")]
                        )
                      ])
                    ]
                  )
                ])
              ])
            ])
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "shape shape-style-3 shape-default" }, [
      _c("span", { staticClass: "span-150" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-50" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-50" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-75" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-100" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-75" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-50" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-100" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-50" }),
      _vm._v(" "),
      _c("span", { staticClass: "span-100" })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/SinglePost.vue":
/*!************************************************!*\
  !*** ./resources/js/components/SinglePost.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _SinglePost_vue_vue_type_template_id_6961d49a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SinglePost.vue?vue&type=template&id=6961d49a&scoped=true& */ "./resources/js/components/SinglePost.vue?vue&type=template&id=6961d49a&scoped=true&");
/* harmony import */ var _SinglePost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SinglePost.vue?vue&type=script&lang=js& */ "./resources/js/components/SinglePost.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css& */ "./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _SinglePost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _SinglePost_vue_vue_type_template_id_6961d49a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _SinglePost_vue_vue_type_template_id_6961d49a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "6961d49a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/SinglePost.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/SinglePost.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/SinglePost.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./SinglePost.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css& ***!
  \*********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=style&index=0&id=6961d49a&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_style_index_0_id_6961d49a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/SinglePost.vue?vue&type=template&id=6961d49a&scoped=true&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/SinglePost.vue?vue&type=template&id=6961d49a&scoped=true& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_template_id_6961d49a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./SinglePost.vue?vue&type=template&id=6961d49a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SinglePost.vue?vue&type=template&id=6961d49a&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_template_id_6961d49a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SinglePost_vue_vue_type_template_id_6961d49a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);