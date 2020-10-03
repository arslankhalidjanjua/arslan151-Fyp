package com.example.fyp.Fragments;

import android.content.Context;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.R;

import android.content.Context;
import android.content.SharedPreferences;
import android.net.Uri;
import android.os.Bundle;
import android.preference.PreferenceManager;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import com.example.fyp.Adapters.OrdersAdapter;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.R;
import com.google.gson.Gson;
import com.google.gson.reflect.TypeToken;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import butterknife.BindView;
import butterknife.ButterKnife;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.Toast;


import org.json.JSONObject;

import java.lang.reflect.Type;
import java.util.ArrayList;

import butterknife.BindView;
import butterknife.ButterKnife;
import java.util.ArrayList;

import butterknife.BindView;
import butterknife.ButterKnife;

public class FragmentOrderDetails extends Fragment {

    private Context context;
    private OrdersBO ordersBO;

    @BindView(R.id.tvOrderId)
    TextView tvOrderId;
    @BindView(R.id.tvOrderDateTime)
    TextView tvOrderDateTime;
    @BindView(R.id.tvOrderNumber)
    TextView tvOrderNumber;
    @BindView(R.id.tvOrderDateTimeDetails)
    TextView tvOrderDateTimeDetails;
    @BindView(R.id.tvOrderStatus)
    TextView tvOrderStatus;
    @BindView(R.id.tvGrandTotal)
    TextView tvGrandTotal;
    @BindView(R.id.tvPaymentInformation)
    TextView tvPaymentInformation;
    @BindView(R.id.tvCustomerName)
    TextView tvCustomerName;
    @BindView(R.id.tvCustomerEmail)
    TextView tvCustomerEmail;
    @BindView(R.id.tvCountry)
    TextView tvCountry;
    @BindView(R.id.tvCity)
    TextView tvCity;
    @BindView(R.id.tvPhoneNumber)
    TextView tvPhoneNumber;
    @BindView(R.id.tvSubTotal)
    TextView tvSubTotal;
    @BindView(R.id.tvShipping)
    TextView tvShipping;
    @BindView(R.id.tvGrand)
    TextView tvGrand;
    @BindView(R.id.tvTotalPaid)
    TextView tvTotalPaid;
    @BindView(R.id.tvTotalDue)
    TextView tvTotalDue;
    @BindView(R.id.ll)
    LinearLayout ll;

    public static FragmentOrderDetails newInstance(OrdersBO ordersBO) {
        FragmentOrderDetails fragment = new FragmentOrderDetails();
        Bundle args = new Bundle();
        args.putParcelable("ordersBO",ordersBO);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_fragment_order_details, container, false);
        context = inflater.getContext();
        ButterKnife.bind(this,view);
        return view;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        if(getArguments()!=null)
        {
            ordersBO = getArguments().getParcelable("ordersBO");
        }

        setupData();
    }

    /*SETUP DATA*/
    private void setupData()
    {
        if(ordersBO!=null)
        {
            tvOrderId.setText("Order#"+ordersBO.getOrder_id());
            tvOrderDateTime.setText(ordersBO.getOrderDateTime());
            tvOrderNumber.setText(ordersBO.getOrder_id());
            tvOrderDateTimeDetails.setText(ordersBO.getOrderDateTime());
            tvOrderStatus.setText(ordersBO.getOrder_status());
            tvGrandTotal.setText(ordersBO.getOrder_Ammount());
            tvPaymentInformation.setText(ordersBO.getPaymentMethod());
            tvCustomerName.setText(ordersBO.getFirstName()+" "+ordersBO.getLastName());
            tvCustomerEmail.setText(ordersBO.getEmail());
            tvCountry.setText(ordersBO.getCountry());
            tvCity.setText(ordersBO.getCity());
            tvPhoneNumber.setText(ordersBO.getContactNo());
            tvSubTotal.setText(ordersBO.getOrder_Ammount());
            tvGrand.setText(ordersBO.getOrder_Ammount());
            tvTotalDue.setText(ordersBO.getOrder_Ammount());
            setupCartItems(ordersBO.getCart());
        }
    }

    /*SETUP CART DATA*/
    private void setupCartItems(ArrayList<CartBO> cartBOArrayList)
    {
        if(cartBOArrayList!=null) {
            for (CartBO cartBO: cartBOArrayList) {
                View view = LayoutInflater.from(context).inflate(R.layout.layout_order_cart_items, null);
                LoadImages.loadImageFromUrl(context, cartBO.getImagepath(), ((ImageView) view.findViewById(R.id.ivImageView)));
                ((TextView)view.findViewById(R.id.tvProductId)).setText("Product Id: "+cartBO.getProduct_id());
                ((TextView)view.findViewById(R.id.tvCartId)).setText("Cart Id: "+cartBO.getCart_id());
                ((TextView)view.findViewById(R.id.tvDescription)).setText("Description: "+cartBO.getDescription());
                ((TextView)view.findViewById(R.id.tvPrice)).setText("Price: "+cartBO.getPrice());
                ((TextView)view.findViewById(R.id.tvQuantity)).setText("Quantity: "+cartBO.getQuantity());
                ((TextView)view.findViewById(R.id.tvTotal)).setText("Total: "+cartBO.getTotal_price());

                ll.addView(view);
            }
        }
    }
}
