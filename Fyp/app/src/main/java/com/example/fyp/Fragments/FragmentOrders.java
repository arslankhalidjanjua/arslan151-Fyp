package com.example.fyp.Fragments;


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

public class FragmentOrders extends Fragment {
    private Context context;
    private OrdersAdapter ordersAdapter;
    private Gson gson;

    @BindView(R.id.rvRecyclerView)
    RecyclerView rvRecyclerView;
    @BindView(R.id.srl)
    SwipeRefreshLayout srl;
    @BindView(R.id.tvNoDataFound)
    TextView tvNoDataFound;

    public static FragmentOrders newInstance() {
        FragmentOrders fragment = new FragmentOrders();
        Bundle args = new Bundle();
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_fragment_orders, container, false);
        context = inflater.getContext();
        ButterKnife.bind(this,view);
        return view;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        gson = new Gson();

        setupSwipeRefreshLayout();
        setupRecycler(new ArrayList<OrdersBO>());
    }

    /*SETUP STOCK RECYCLER*/
    private void setupRecycler(ArrayList<OrdersBO> arrayList)
    {
        if(rvRecyclerView!=null && rvRecyclerView.getAdapter()==null)
        {
            rvRecyclerView.setLayoutManager(new LinearLayoutManager(context));
            ordersAdapter = new OrdersAdapter(context,arrayList);
            rvRecyclerView.setAdapter(ordersAdapter);
        }
        else
        {
            ordersAdapter.addItems(arrayList);
        }
    }

    /*SETUP SWIPE REFRESH LAYOUT*/
    private void setupSwipeRefreshLayout()
    {
        srl.setColorScheme(R.color.color);
        srl.post(new Runnable() {
            @Override
            public void run() {
                setupRefreshing(true);
                callGetOrdersApi();
            }
        });
        srl.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                setupRefreshing(true);
                callGetOrdersApi();
            }
        });
    }

    /*SETUP REFRESHING*/
    private void setupRefreshing(boolean isRefreshing)
    {
        if(isRefreshing)
        {
            srl.setRefreshing(isRefreshing);
        }
        else
        {
            srl.setRefreshing(isRefreshing);
        }
    }

    /*PARSE JSON STRING*/
    private void parseJson(String jsonString)
    {
        try {
            JSONObject jsonObject = new JSONObject(jsonString);
            Type type = new TypeToken<ArrayList<OrdersBO>>(){}.getType();

            ArrayList<OrdersBO> arrayList = gson.fromJson(jsonObject.getJSONArray("result").toString(),type);
            setupRecycler(arrayList);

            if(arrayList.size()>0)
            {
                rvRecyclerView.setVisibility(View.VISIBLE);
                tvNoDataFound.setVisibility(View.GONE);
            }
            else
            {
                rvRecyclerView.setVisibility(View.GONE);
                tvNoDataFound.setVisibility(View.VISIBLE);
            }

            setupRefreshing(false);
        }
        catch (Exception e)
        {
            e.toString();
        }
    }

    /*CALL GET ORDERS API*/
    private void callGetOrdersApi()
    {
        Ion.with(context)
                .load(getResources().getString(R.string.base_url) +"getOrdersForMobile.php")
                .asString().setCallback(new FutureCallback<String>() {
            @Override
            public void onCompleted(Exception e, String result) {
                if(e!=null)
                {
                    Toast.makeText(context,e.toString(),Toast.LENGTH_SHORT).show();
                }
                else if(!TextUtils.isEmpty(result))
                {
                    parseJson(result);
                }
            }
        });
    }
}
