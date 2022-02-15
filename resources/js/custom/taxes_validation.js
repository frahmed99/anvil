/*!
 * codebase - v5.1.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2022
 */
Codebase.onLoad(
    class {
        static initValidation() {
            Codebase.helpers("jq-validation"),
                jQuery(".tax-validation").validate({
                    ignore: [],
                    rules: {
                        "edit_tax_name": { required: !0, minlength: 3 },
                        "edit_tax_rate": { required: !0, number: !0, min:0, max:100 },
                    },
                    messages: {
                        "edit_tax_name": {
                            required: "Please enter a username",
                            minlength:
                                "Your username must consist of at least 3 characters",
                        },
                        "edit_tax_rate": "Please enter a number!",
                    },
                }),
                jQuery(".js-select2").on("change", (e) => {
                    jQuery(e.currentTarget).valid();
                });
        }
        static init() {
            this.initValidation();
        }
    }.init()
);
