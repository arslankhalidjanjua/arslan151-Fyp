package com.example.fyp.Models;

import android.os.Parcel;
import android.os.Parcelable;

import java.util.ArrayList;

public class OrdersBO implements Parcelable {

    String Order_id;
    String FirstName;
    String LastName;
    String Email;
    String Country;
    String State;
    String City;
    String Zip_code;
    String contactNo;
    String ShippingAddress;
    String ShippingMethod;
    String PaymentMethod;
    String TypeOfCreditcard;
    String NameOnCC;
    String CCNo;
    String CVV;
    String ExpirationDate;
    String Order_Ammount;
    String temp;
    String OrderDateTime;
    String Email_id;
    String order_status;
    ArrayList<CartBO> cart;

    public OrdersBO(String order_id, String firstName, String lastName, String email, String country, String state, String city, String zip_code, String contactNo, String shippingAddress, String shippingMethod, String paymentMethod, String typeOfCreditcard, String nameOnCC, String CCNo, String CVV, String expirationDate, String order_Ammount, String temp, String orderDateTime, String email_id, String order_status, ArrayList<CartBO> cart) {
        Order_id = order_id;
        FirstName = firstName;
        LastName = lastName;
        Email = email;
        Country = country;
        State = state;
        City = city;
        Zip_code = zip_code;
        this.contactNo = contactNo;
        ShippingAddress = shippingAddress;
        ShippingMethod = shippingMethod;
        PaymentMethod = paymentMethod;
        TypeOfCreditcard = typeOfCreditcard;
        NameOnCC = nameOnCC;
        this.CCNo = CCNo;
        this.CVV = CVV;
        ExpirationDate = expirationDate;
        Order_Ammount = order_Ammount;
        this.temp = temp;
        OrderDateTime = orderDateTime;
        Email_id = email_id;
        this.order_status = order_status;
        this.cart = cart;
    }

    protected OrdersBO(Parcel in) {
        Order_id = in.readString();
        FirstName = in.readString();
        LastName = in.readString();
        Email = in.readString();
        Country = in.readString();
        State = in.readString();
        City = in.readString();
        Zip_code = in.readString();
        contactNo = in.readString();
        ShippingAddress = in.readString();
        ShippingMethod = in.readString();
        PaymentMethod = in.readString();
        TypeOfCreditcard = in.readString();
        NameOnCC = in.readString();
        CCNo = in.readString();
        CVV = in.readString();
        ExpirationDate = in.readString();
        Order_Ammount = in.readString();
        temp = in.readString();
        OrderDateTime = in.readString();
        Email_id = in.readString();
        order_status = in.readString();
        cart = in.createTypedArrayList(CartBO.CREATOR);
    }

    public static final Creator<OrdersBO> CREATOR = new Creator<OrdersBO>() {
        @Override
        public OrdersBO createFromParcel(Parcel in) {
            return new OrdersBO(in);
        }

        @Override
        public OrdersBO[] newArray(int size) {
            return new OrdersBO[size];
        }
    };

    public String getOrder_id() {
        return Order_id;
    }

    public void setOrder_id(String order_id) {
        Order_id = order_id;
    }

    public String getFirstName() {
        return FirstName;
    }

    public void setFirstName(String firstName) {
        FirstName = firstName;
    }

    public String getLastName() {
        return LastName;
    }

    public void setLastName(String lastName) {
        LastName = lastName;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String email) {
        Email = email;
    }

    public String getCountry() {
        return Country;
    }

    public void setCountry(String country) {
        Country = country;
    }

    public String getState() {
        return State;
    }

    public void setState(String state) {
        State = state;
    }

    public String getCity() {
        return City;
    }

    public void setCity(String city) {
        City = city;
    }

    public String getZip_code() {
        return Zip_code;
    }

    public void setZip_code(String zip_code) {
        Zip_code = zip_code;
    }

    public String getContactNo() {
        return contactNo;
    }

    public void setContactNo(String contactNo) {
        this.contactNo = contactNo;
    }

    public String getShippingAddress() {
        return ShippingAddress;
    }

    public void setShippingAddress(String shippingAddress) {
        ShippingAddress = shippingAddress;
    }

    public String getShippingMethod() {
        return ShippingMethod;
    }

    public void setShippingMethod(String shippingMethod) {
        ShippingMethod = shippingMethod;
    }

    public String getPaymentMethod() {
        return PaymentMethod;
    }

    public void setPaymentMethod(String paymentMethod) {
        PaymentMethod = paymentMethod;
    }

    public String getTypeOfCreditcard() {
        return TypeOfCreditcard;
    }

    public void setTypeOfCreditcard(String typeOfCreditcard) {
        TypeOfCreditcard = typeOfCreditcard;
    }

    public String getNameOnCC() {
        return NameOnCC;
    }

    public void setNameOnCC(String nameOnCC) {
        NameOnCC = nameOnCC;
    }

    public String getCCNo() {
        return CCNo;
    }

    public void setCCNo(String CCNo) {
        this.CCNo = CCNo;
    }

    public String getCVV() {
        return CVV;
    }

    public void setCVV(String CVV) {
        this.CVV = CVV;
    }

    public String getExpirationDate() {
        return ExpirationDate;
    }

    public void setExpirationDate(String expirationDate) {
        ExpirationDate = expirationDate;
    }

    public String getOrder_Ammount() {
        return Order_Ammount;
    }

    public void setOrder_Ammount(String order_Ammount) {
        Order_Ammount = order_Ammount;
    }

    public String getTemp() {
        return temp;
    }

    public void setTemp(String temp) {
        this.temp = temp;
    }

    public String getOrderDateTime() {
        return OrderDateTime;
    }

    public void setOrderDateTime(String orderDateTime) {
        OrderDateTime = orderDateTime;
    }

    public String getEmail_id() {
        return Email_id;
    }

    public void setEmail_id(String email_id) {
        Email_id = email_id;
    }

    public String getOrder_status() {
        return order_status;
    }

    public void setOrder_status(String order_status) {
        this.order_status = order_status;
    }

    public ArrayList<CartBO> getCart() {
        return cart;
    }

    public void setCart(ArrayList<CartBO> cart) {
        this.cart = cart;
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeString(Order_id);
        dest.writeString(FirstName);
        dest.writeString(LastName);
        dest.writeString(Email);
        dest.writeString(Country);
        dest.writeString(State);
        dest.writeString(City);
        dest.writeString(Zip_code);
        dest.writeString(contactNo);
        dest.writeString(ShippingAddress);
        dest.writeString(ShippingMethod);
        dest.writeString(PaymentMethod);
        dest.writeString(TypeOfCreditcard);
        dest.writeString(NameOnCC);
        dest.writeString(CCNo);
        dest.writeString(CVV);
        dest.writeString(ExpirationDate);
        dest.writeString(Order_Ammount);
        dest.writeString(temp);
        dest.writeString(OrderDateTime);
        dest.writeString(Email_id);
        dest.writeString(order_status);
        dest.writeTypedList(cart);
    }
}
