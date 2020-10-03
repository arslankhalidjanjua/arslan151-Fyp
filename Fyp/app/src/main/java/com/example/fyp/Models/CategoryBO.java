package com.example.fyp.Models;

import android.os.Parcel;
import android.os.Parcelable;

public class CategoryBO implements Parcelable {
    String product_category_id;
    String product_category_name;
    String gender;
    String Date;

    public CategoryBO(String product_category_id, String product_category_name, String gender, String date) {
        this.product_category_id = product_category_id;
        this.product_category_name = product_category_name;
        this.gender = gender;
        Date = date;
    }

    protected CategoryBO(Parcel in) {
        product_category_id = in.readString();
        product_category_name = in.readString();
        gender = in.readString();
        Date = in.readString();
    }

    public static final Creator<CategoryBO> CREATOR = new Creator<CategoryBO>() {
        @Override
        public CategoryBO createFromParcel(Parcel in) {
            return new CategoryBO(in);
        }

        @Override
        public CategoryBO[] newArray(int size) {
            return new CategoryBO[size];
        }
    };

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeString(product_category_id);
        dest.writeString(product_category_name);
        dest.writeString(gender);
        dest.writeString(Date);
    }

    public String getProduct_category_id() {
        return product_category_id;
    }

    public void setProduct_category_id(String product_category_id) {
        this.product_category_id = product_category_id;
    }

    public String getProduct_category_name() {
        return product_category_name;
    }

    public void setProduct_category_name(String product_category_name) {
        this.product_category_name = product_category_name;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getDate() {
        return Date;
    }

    public void setDate(String date) {
        Date = date;
    }
}
