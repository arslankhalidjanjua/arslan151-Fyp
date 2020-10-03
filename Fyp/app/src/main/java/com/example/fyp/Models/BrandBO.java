package com.example.fyp.Models;

import android.os.Parcel;
import android.os.Parcelable;

public class BrandBO implements Parcelable {
    String product_brand_id;
    String product_brand_name;
    String Date;

    public BrandBO(String product_brand_id, String product_brand_name, String date) {
        this.product_brand_id = product_brand_id;
        this.product_brand_name = product_brand_name;
        Date = date;
    }

    protected BrandBO(Parcel in) {
        product_brand_id = in.readString();
        product_brand_name = in.readString();
        Date = in.readString();
    }

    public static final Creator<BrandBO> CREATOR = new Creator<BrandBO>() {
        @Override
        public BrandBO createFromParcel(Parcel in) {
            return new BrandBO(in);
        }

        @Override
        public BrandBO[] newArray(int size) {
            return new BrandBO[size];
        }
    };

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeString(product_brand_id);
        dest.writeString(product_brand_name);
        dest.writeString(Date);
    }

    public String getProduct_brand_id() {
        return product_brand_id;
    }

    public void setProduct_brand_id(String product_brand_id) {
        this.product_brand_id = product_brand_id;
    }

    public String getProduct_brand_name() {
        return product_brand_name;
    }

    public void setProduct_brand_name(String product_brand_name) {
        this.product_brand_name = product_brand_name;
    }

    public String getDate() {
        return Date;
    }

    public void setDate(String date) {
        Date = date;
    }
}
