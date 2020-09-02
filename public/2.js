(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Landing.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Landing.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
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
      category: {}
    };
  },
  mounted: function mounted() {
    this.fetCategory();
  },
  methods: {
    fetCategory: function fetCategory() {
      var _this = this;

      axios__WEBPACK_IMPORTED_MODULE_0___default.a.get('/api/user/category').then(function (res) {
        _this.category = res.data;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Landing.vue?vue&type=template&id=15bf0008&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Landing.vue?vue&type=template&id=15bf0008& ***!
  \**********************************************************************************************************************************************************************************************************/
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
  return _c("div", {}, [
    _c("div", { staticClass: "wrapper" }, [
      _c("div", { staticClass: "section section-hero section-shaped" }, [
        _vm._m(0),
        _vm._v(" "),
        _vm._m(1),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "separator separator-bottom separator-skew zindex-100"
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
      ]),
      _vm._v(" "),
      _vm._m(2),
      _vm._v(" "),
      _c("div", { staticClass: "section features-1" }, [
        _c("div", { staticClass: "container" }, [
          _vm._m(3),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "row" },
            _vm._l(_vm.category, function(each) {
              return _c(
                "div",
                { key: _vm.category.index, staticClass: "col-md-4" },
                [
                  _c(
                    "div",
                    { staticClass: "info" },
                    [
                      _vm._m(4, true),
                      _vm._v(" "),
                      _c(
                        "h6",
                        {
                          staticClass: "info-title text-uppercase text-primary"
                        },
                        [_vm._v(_vm._s(each.name))]
                      ),
                      _vm._v(" "),
                      _c("p", { staticClass: "description opacity-8" }, [
                        _vm._v(_vm._s(each.description))
                      ]),
                      _vm._v(" "),
                      _c(
                        "router-link",
                        {
                          attrs: {
                            to: {
                              path:
                                "/category/post/" + each.id + "/" + each.name
                            }
                          }
                        },
                        [
                          _vm._v("See posts\n                  "),
                          _c("i", {
                            staticClass: "ni ni-bold-right text-primary"
                          })
                        ]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("br")
                ]
              )
            }),
            0
          )
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
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "page-header" }, [
      _c(
        "div",
        {
          staticClass:
            "container shape-container d-flex align-items-center py-lg"
        },
        [
          _c("div", { staticClass: "col px-0" }, [
            _c(
              "div",
              { staticClass: "row align-items-center justify-content-center" },
              [
                _c("div", { staticClass: "col-lg-6 text-center" }, [
                  _c("h1", { staticClass: "text-white display-1" }, [
                    _vm._v("People stories")
                  ]),
                  _vm._v(" "),
                  _c(
                    "h2",
                    { staticClass: "display-4 font-weight-normal text-white" },
                    [_vm._v("The time is right now!")]
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "btn-wrapper mt-4" }, [
                    _c(
                      "a",
                      {
                        staticClass: "btn btn-warning btn-icon mt-3 mb-sm-0",
                        attrs: {
                          href:
                            "https://www.creative-tim.com/product/argon-design-system"
                        }
                      },
                      [
                        _c("span", { staticClass: "btn-inner--icon" }, [
                          _c("i", { staticClass: "ni ni-button-play" })
                        ]),
                        _vm._v(" "),
                        _c("span", { staticClass: "btn-inner--text" }, [
                          _vm._v("Play more")
                        ])
                      ]
                    )
                  ])
                ])
              ]
            )
          ])
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "section features-6" }, [
      _c("div", { staticClass: "container" }, [
        _c("div", { staticClass: "row align-items-center" }, [
          _c("div", { staticClass: "col-lg-6" }, [
            _c(
              "div",
              { staticClass: "info info-horizontal info-hover-primary" },
              [
                _c("div", { staticClass: "description pl-4" }, [
                  _c("h5", { staticClass: "title" }, [
                    _vm._v("For Developers")
                  ]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v(
                      "The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now."
                    )
                  ]),
                  _vm._v(" "),
                  _c("a", { staticClass: "text-info", attrs: { href: "#" } }, [
                    _vm._v("Learn more")
                  ])
                ])
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "info info-horizontal info-hover-primary mt-5" },
              [
                _c("div", { staticClass: "description pl-4" }, [
                  _c("h5", { staticClass: "title" }, [_vm._v("For Designers")]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v(
                      "There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill. I’m not really specifically talented at anything except for the ability to learn."
                    )
                  ]),
                  _vm._v(" "),
                  _c("a", { staticClass: "text-info", attrs: { href: "#" } }, [
                    _vm._v("Learn more")
                  ])
                ])
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "info info-horizontal info-hover-primary mt-5" },
              [
                _c("div", { staticClass: "description pl-4" }, [
                  _c("h5", { staticClass: "title" }, [_vm._v("For Beginners")]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v(
                      "That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you can’t learn anything from a compliment. If everything I did failed - which it doesn't."
                    )
                  ]),
                  _vm._v(" "),
                  _c("a", { staticClass: "text-info", attrs: { href: "#" } }, [
                    _vm._v("Learn more")
                  ])
                ])
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-lg-6 col-10 mx-md-auto" }, [
            _c("img", {
              staticClass: "ml-lg-5",
              attrs: {
                src:
                  "https://demos.creative-tim.com/argon-design-system/assets/img/ill/ill.png",
                width: "100%"
              }
            })
          ])
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-8 mx-auto text-center" }, [
        _c("span", { staticClass: "badge badge-primary badge-pill mb-3" }, [
          _vm._v("Insight")
        ]),
        _vm._v(" "),
        _c("h3", { staticClass: "display-3" }, [_vm._v("Chategories")]),
        _vm._v(" "),
        _c("p", { staticClass: "lead" }, [
          _vm._v(
            "The time is now for it to be okay to be great. For being a bright color. For standing out."
          )
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass:
          "icon icon-lg icon-shape icon-shape-primary shadow rounded-circle"
      },
      [_c("i", { staticClass: "ni ni-settings-gear-65" })]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/Landing.vue":
/*!*********************************************!*\
  !*** ./resources/js/components/Landing.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Landing_vue_vue_type_template_id_15bf0008___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Landing.vue?vue&type=template&id=15bf0008& */ "./resources/js/components/Landing.vue?vue&type=template&id=15bf0008&");
/* harmony import */ var _Landing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Landing.vue?vue&type=script&lang=js& */ "./resources/js/components/Landing.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Landing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Landing_vue_vue_type_template_id_15bf0008___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Landing_vue_vue_type_template_id_15bf0008___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Landing.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/Landing.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./resources/js/components/Landing.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Landing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Landing.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Landing.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Landing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Landing.vue?vue&type=template&id=15bf0008&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/Landing.vue?vue&type=template&id=15bf0008& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Landing_vue_vue_type_template_id_15bf0008___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Landing.vue?vue&type=template&id=15bf0008& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Landing.vue?vue&type=template&id=15bf0008&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Landing_vue_vue_type_template_id_15bf0008___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Landing_vue_vue_type_template_id_15bf0008___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);