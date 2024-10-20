import React, { useEffect, useState } from "react";
import { connect } from "react-redux";
import { Form } from "react-bootstrap-v5";
import MasterLayout from "../MasterLayout";
import TabTitle from "../../shared/tab-title/TabTitle";
import {
    getFormattedMessage,
    placeholderText,
} from "../../shared/sharedMethod";
import HeaderTitle from "../header/HeaderTitle";
import TopProgressBar from "../../shared/components/loaders/TopProgressBar";
import Spinner from "../../shared/components/loaders/Spinner";
import { editReceiptSettings } from "../../store/action/receiptSettingsAction";
import { fetchSetting } from "../../store/action/settingAction";

const ReceiptSettings = (props) => {
    const { settings, editReceiptSettings, isLoading, fetchSetting } = props;

    const [formValues, setFormValues] = useState({
        show_note: true,
        notes: "",
        show_phone: true,
        show_customer: true,
        show_address: true,
        show_email: true,
        // show_warehouse: true,
        show_tax_discount_shipping: true,
        show_barcode_in_receipt: true,
        show_logo_in_receipt: true,
    });

    const [disable, setDisable] = React.useState(true);
    const [error, setError] = useState("");

    useEffect(() => {
        fetchSetting();
    }, []);

    useEffect(() => {
        if (settings) {
            setFormValues({
                show_phone: settings.attributes?.show_phone === "1",
                show_address: settings.attributes?.show_address === "1",
                show_customer: settings.attributes?.show_customer === "1",
                show_email: settings.attributes?.show_email === "1",
                show_tax_discount_shipping:
                    settings.attributes?.show_tax_discount_shipping === "1",
                // show_warehouse: settings.attributes?.show_warehouse === "1",
                show_note: settings.attributes?.show_note === "1",
                notes: settings.attributes?.notes ?? "",
                show_barcode_in_receipt:
                    settings.attributes?.show_barcode_in_receipt === "1",
                show_logo_in_receipt:
                    settings.attributes?.show_logo_in_receipt === "1",
            });
        }
    }, [settings]);

    const handleInputChange = (e) => {
        setDisable(false);
        const { name, value, type, checked } = e.target;
        setFormValues({
            ...formValues,
            [name]: type === "checkbox" ? checked : value,
        });
    };

    const handleValidation = () => {
        let isValid = false;
        if (formValues.show_note && formValues["notes"].trim() === "") {
            setError(
                getFormattedMessage(
                    "receipt-settigns.input.note.validate.label"
                )
            );
        } else {
            isValid = true;
        }
        return isValid;
    };

    const onEdit = (event) => {
        event.preventDefault();
        const valid = handleValidation();
        if (valid) {
            editReceiptSettings(formValues);
            setDisable(true);
            setError("");
        }
    };

    return (
        <MasterLayout>
            <TopProgressBar />
            <TabTitle title={placeholderText("receipt-settings.title")} />
            <HeaderTitle
                title={getFormattedMessage("receipt-settings.title")}
            />
            {isLoading ? (
                <Spinner />
            ) : (
                <div className="card">
                    <div className="card-body">
                        <Form onSubmit={onEdit}>
                            <div className="row">
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_note"
                                            checked={formValues.show_note}
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-note.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_phone"
                                            checked={formValues.show_phone}
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-phone.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_customer"
                                            checked={formValues.show_customer}
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-customer.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_address"
                                            checked={formValues.show_address}
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-address.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_email"
                                            checked={formValues.show_email}
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-email.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                {/* <div className="col-lg-4 mb-3">
                                        <div className="form-check form-switch">
                                            <input
                                                className="form-check-input"
                                                type="checkbox"
                                                name="show_warehouse"
                                                checked={formValues.show_warehouse}
                                                onChange={handleInputChange}
                                            />
                                            <label className="form-check-label">
                                                {getFormattedMessage("receipt-settings.show-warehouse.label")}
                                            </label>
                                        </div>
                                    </div> */}
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_tax_discount_shipping"
                                            checked={
                                                formValues.show_tax_discount_shipping
                                            }
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-tax-discount-shipping.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            className="form-check-input"
                                            type="checkbox"
                                            name="show_barcode_in_receipt"
                                            checked={
                                                formValues.show_barcode_in_receipt
                                            }
                                            onChange={handleInputChange}
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "receipt-settings.show-barcode.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                <div className="col-lg-4 mb-3">
                                    <div className="form-check form-switch">
                                        <input
                                            type="checkbox"
                                            name="show_logo_in_receipt"
                                            checked={
                                                formValues.show_logo_in_receipt
                                            }
                                            onChange={handleInputChange}
                                            className="me-3 form-check-input cursor-pointer"
                                        />
                                        <label className="form-check-label">
                                            {getFormattedMessage(
                                                "settings.system-settings.select.logo.placeholder.label"
                                            )}
                                        </label>
                                    </div>
                                </div>
                                {formValues.show_note && (
                                    <div className="col-lg-12 mb-3">
                                        <label className="form-label">
                                            {getFormattedMessage(
                                                "globally.input.note.label"
                                            )}
                                            :<span className="required" />
                                        </label>
                                        <textarea
                                            className="form-control"
                                            rows={2}
                                            placeholder={placeholderText(
                                                "globally.input.note.label"
                                            )}
                                            name="notes"
                                            value={formValues.notes}
                                            onChange={handleInputChange}
                                        />
                                        <span className="text-danger d-block fw-400 fs-small mt-2">
                                            {error ? error : ""}
                                        </span>
                                    </div>
                                )}
                            </div>

                            <div>
                                <button
                                    disabled={disable}
                                    className="btn btn-primary"
                                    type="submit"
                                >
                                    {getFormattedMessage("globally.save-btn")}
                                </button>
                            </div>
                        </Form>
                    </div>
                </div>
            )}
        </MasterLayout>
    );
};

const mapStateToProps = (state) => {
    const { isLoading, settings } = state;
    return { isLoading, settings };
};

export default connect(mapStateToProps, {
    editReceiptSettings,
    fetchSetting,
})(ReceiptSettings);
