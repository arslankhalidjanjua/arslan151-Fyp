package com.example.fyp.Models;

import android.os.Parcel;
import android.os.Parcelable;

public class StockBO implements Parcelable {

    String Product_id;
    String gender;
    String product_category_id;
    String ProductType;
    String product_brand_id;
    String Price;
    String Imagepath;
    String Description;
    String stock;
    CategoryBO cat;
    BrandBO brand;

    public StockBO(String product_id, String gender, String product_category_id, String productType, String product_brand_id, String price, String imagepath, String description, String stock, CategoryBO cat, BrandBO brand) {
        Product_id = product_id;
        this.gender = gender;
        this.product_category_id = product_category_id;
        ProductType = productType;
        this.product_brand_id = product_brand_id;
        Price = price;
        Imagepath = imagepath;
        Description = description;
        this.stock = stock;
        this.cat = cat;
        this.brand = brand;
    }

    protected StockBO(Parcel in) {
        Product_id = in.readString();
        gender = in.readString();
        product_category_id = in.readString();
        ProductType = in.readString();
        product_brand_id = in.readString();
        Price = in.readString();
        Imagepath = in.readString();
        Description = in.readString();
        stock = in.readString();
        cat = in.readParcelable(CategoryBO.class.getClassLoader());
        brand = in.readParcelable(BrandBO.class.getClassLoader());
    }

    public static final Creator<StockBO> CREATOR = new Creator<StockBO>() {
        @Override
        public StockBO createFromParcel(Parcel in) {
            return new StockBO(in);
        }

        @Override
        public StockBO[] newArray(int size) {
            return new StockBO[size];
        }
    };

    public String getProduct_id() {
        return Product_id;
    }

    public void setProduct_id(String product_id) {
        Product_id = product_id;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getProduct_category_id() {
        return product_category_id;
    }

    public void setProduct_category_id(String product_category_id) {
        this.product_category_id = product_category_id;
    }

    public String getProductType() {
        return ProductType;
    }

    public void setProductType(String productType) {
        ProductType = productType;
    }

    public String getProduct_brand_id() {
        return product_brand_id;
    }

    public void setProduct_brand_id(String product_brand_id) {
        this.product_brand_id = product_brand_id;
    }

    public String getPrice() {
        return Price;
    }

    public void setPrice(String price) {
        Price = price;
    }

    public String getImagepath() {
        return Imagepath;
    }

    public void setImagepath(String imagepath) {
        Imagepath = imagepath;
    }

    public String getDescription() {
        return Description;
    }

    public void setDescription(String description) {
        Description = description;
    }

    public String getStock() {
        return stock;
    }

    public void setStock(String stock) {
        this.stock = stock;
    }

    public CategoryBO getCat() {
        return cat;
    }

    public void setCat(CategoryBO cat) {
        this.cat = cat;
    }

    public BrandBO getBrand() {
        return brand;
    }

    public void setBrand(BrandBO brand) {
        this.brand = brand;
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeString(Product_id);
        dest.writeString(gender);
        dest.writeString(product_category_id);
        dest.writeString(ProductType);
        dest.writeString(product_brand_id);
        dest.writeString(Price);
        dest.writeString(Imagepath);
        dest.writeString(Description);
        dest.writeString(stock);
        dest.writeParcelable(cat, flags);
        dest.writeParcelable(brand, flags);
    }
}
