(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CategoryPost.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/CategoryPost.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      categoryPost: {},
      categoryName: ''
    };
  },
  mounted: function mounted() {
    var id = this.$route.params.id;
    this.categoryName = this.$route.params.name;
    this.post(id);
  },
  methods: {
    /**
     * Fetch all category post. 
     * @param URL
     * @return $response
     */
    post: function post(id) {
      var _this = this;

      axios__WEBPACK_IMPORTED_MODULE_0___default.a.get("api/user/category/post/".concat(id)).then(function (res) {
        _this.categoryPost = res;
        console.log(_this.categoryPost);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CategoryPost.vue?vue&type=template&id=4b9c00ae&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/CategoryPost.vue?vue&type=template&id=4b9c00ae& ***!
  \***************************************************************************************************************************************************************************************************************/
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
    _c("div", { staticClass: "wrapper" }, [
      _c("div", { staticClass: "section features-1" }, [
        _c("div", { staticClass: "container" }, [
          _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-md-8 mx-auto text-center" }, [
              _c(
                "span",
                { staticClass: "badge badge-primary badge-pill mb-3" },
                [_vm._v("Insight")]
              ),
              _vm._v(" "),
              _c("h3", { staticClass: "display-3" }, [
                _vm._v(_vm._s(this.categoryName))
              ]),
              _vm._v(" "),
              _c("p", { staticClass: "lead" }, [
                _vm._v(
                  "The time is now for it to be okay to be great. For being a bright color. For standing out."
                )
              ])
            ])
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "row" },
            _vm._l(_vm.categoryPost, function(each) {
              return _c(
                "div",
                { key: _vm.categoryPost.index, staticClass: "col-md-4" },
                [
                  _c(
                    "div",
                    { staticClass: "info card p-3" },
                    [
                      _c(
                        "h6",
                        {
                          staticClass: "info-title text-uppercase text-primary"
                        },
                        [_vm._v(_vm._s(each.title))]
                      ),
                      _vm._v(" "),
                      _c("p", { staticClass: "description opacity-8" }, [
                        _vm._v(_vm._s(each.content))
                      ]),
                      _vm._v(" "),
                      _c(
                        "router-link",
                        {
                          attrs: {
                            to: { path: "/category/single/post/" + each.id }
                          }
                        },
                        [_vm._v("Read More..")]
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
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/CategoryPost.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/CategoryPost.vue ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _CategoryPost_vue_vue_type_template_id_4b9c00ae___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CategoryPost.vue?vue&type=template&id=4b9c00ae& */ "./resources/js/components/CategoryPost.vue?vue&type=template&id=4b9c00ae&");
/* harmony import */ var _CategoryPost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CategoryPost.vue?vue&type=script&lang=js& */ "./resources/js/components/CategoryPost.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _CategoryPost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _CategoryPost_vue_vue_type_template_id_4b9c00ae___WEBPACK_IMPORTED_MODULE_0__["render"],
  _CategoryPost_vue_vue_type_template_id_4b9c00ae___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/CategoryPost.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/CategoryPost.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/CategoryPost.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoryPost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./CategoryPost.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CategoryPost.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoryPost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/CategoryPost.vue?vue&type=template&id=4b9c00ae&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/CategoryPost.vue?vue&type=template&id=4b9c00ae& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoryPost_vue_vue_type_template_id_4b9c00ae___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./CategoryPost.vue?vue&type=template&id=4b9c00ae& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CategoryPost.vue?vue&type=template&id=4b9c00ae&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoryPost_vue_vue_type_template_id_4b9c00ae___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoryPost_vue_vue_type_template_id_4b9c00ae___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);