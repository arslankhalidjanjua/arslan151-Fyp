package com.example.fyp.Models;

import android.os.Parcel;
import android.os.Parcelable;

public class CartBO implements Parcelable {

    String Cart_id;
    String Order_id;
    String Product_id;
    String productname;
    String brand;
    String description;
    String Imagepath;
    String price;
    String quantity;
    String Total_price;
    String email;
    String temp;
    String date_time;

    public CartBO(String cart_id, String order_id, String product_id, String productname, String brand, String description, String imagepath, String price, String quantity, String total_price, String email, String temp, String date_time) {
        Cart_id = cart_id;
        Order_id = order_id;
        Product_id = product_id;
        this.productname = productname;
        this.brand = brand;
        this.description = description;
        Imagepath = imagepath;
        this.price = price;
        this.quantity = quantity;
        Total_price = total_price;
        this.email = email;
        this.temp = temp;
        this.date_time = date_time;
    }

    protected CartBO(Parcel in) {
        Cart_id = in.readString();
        Order_id = in.readString();
        Product_id = in.readString();
        productname = in.readString();
        brand = in.readString();
        description = in.readString();
        Imagepath = in.readString();
        price = in.readString();
        quantity = in.readString();
        Total_price = in.readString();
        email = in.readString();
        temp = in.readString();
        date_time = in.readString();
    }

    public static final Creator<CartBO> CREATOR = new Creator<CartBO>() {
        @Override
        public CartBO createFromParcel(Parcel in) {
            return new CartBO(in);
        }

        @Override
        public CartBO[] newArray(int size) {
            return new CartBO[size];
        }
    };

    public String getCart_id() {
        return Cart_id;
    }

    public void setCart_id(String cart_id) {
        Cart_id = cart_id;
    }

    public String getOrder_id() {
        return Order_id;
    }

    public void setOrder_id(String order_id) {
        Order_id = order_id;
    }

    public String getProduct_id() {
        return Product_id;
    }

    public void setProduct_id(String product_id) {
        Product_id = product_id;
    }

    public String getProductname() {
        return productname;
    }

    public void setProductname(String productname) {
        this.productname = productname;
    }

    public String getBrand() {
        return brand;
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getImagepath() {
        return Imagepath;
    }

    public void setImagepath(String imagepath) {
        Imagepath = imagepath;
    }

    public String getPrice() {
        return price;
    }

    public void setPrice(String price) {
        this.price = price;
    }

    public String getQuantity() {
        return quantity;
    }

    public void setQuantity(String quantity) {
        this.quantity = quantity;
    }

    public String getTotal_price() {
        return Total_price;
    }

    public void setTotal_price(String total_price) {
        Total_price = total_price;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getTemp() {
        return temp;
    }

    public void setTemp(String temp) {
        this.temp = temp;
    }

    public String getDate_time() {
        return date_time;
    }

    public void setDate_time(String date_time) {
        this.date_time = date_time;
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeString(Cart_id);
        dest.writeString(Order_id);
        dest.writeString(Product_id);
        dest.writeString(productname);
        dest.writeString(brand);
        dest.writeString(description);
        dest.writeString(Imagepath);
        dest.writeString(price);
        dest.writeString(quantity);
        dest.writeString(Total_price);
        dest.writeString(email);
        dest.writeString(temp);
        dest.writeString(date_time);
    }
}
