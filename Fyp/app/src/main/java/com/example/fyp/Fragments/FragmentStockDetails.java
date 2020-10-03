package com.example.fyp.Fragments;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.text.TextUtils;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.Models.StockBO;
import com.example.fyp.R;
import com.example.fyp.Utils.Utilities;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import org.json.JSONObject;

import butterknife.BindView;
import butterknife.ButterKnife;

public class FragmentStockDetails extends Fragment {

    private Context context;
    private StockBO stockBO;

    @BindView(R.id.ivImageView)
    ImageView ivImageView;
    @BindView(R.id.tvProductType)
    TextView tvProductType;
    @BindView(R.id.tvBrand)
    TextView tvBrand;
    @BindView(R.id.tvProductNameType)
    TextView tvProductNameType;
    @BindView(R.id.tvProductCategory)
    TextView tvProductCategory;
    @BindView(R.id.tvProductBrand)
    TextView tvProductBrand;
    @BindView(R.id.tvProductPrice)
    TextView tvProductPrice;
    @BindView(R.id.tvProductDescription)
    TextView tvProductDescription;
    @BindView(R.id.tvProductQuantityAvailable)
    TextView tvProductQuantityAvailable;

    public static FragmentStockDetails newInstance(StockBO stockBO) {
        FragmentStockDetails fragment = new FragmentStockDetails();
        Bundle args = new Bundle();
        args.putParcelable("stockBO",stockBO);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_fragment_stock_details, container, false);
        context = inflater.getContext();
        ButterKnife.bind(this,view);
        return view;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        if(getArguments()!=null)
        {
            stockBO = getArguments().getParcelable("stockBO");
        }

        setupData();
    }

    /*SETUP STOCK ITEM DETAILS*/
    private void setupData() {
        if(stockBO!=null)
        {
            LoadImages.loadImageFromUrl(context,stockBO.getImagepath(),ivImageView);
            tvProductType.setText(stockBO.getProductType());
            tvBrand.setText(stockBO.getBrand().getProduct_brand_name());
            tvProductNameType.setText(stockBO.getProductType());
            tvProductCategory.setText(stockBO.getCat().getProduct_category_name());
            tvProductBrand.setText(stockBO.getBrand().getProduct_brand_name());
            tvProductPrice.setText(stockBO.getPrice());
            tvProductDescription.setText(stockBO.getDescription());
            tvProductQuantityAvailable.setText(stockBO.getStock());
        }
    }
}
