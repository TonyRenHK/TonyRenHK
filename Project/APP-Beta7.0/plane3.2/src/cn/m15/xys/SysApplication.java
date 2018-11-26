package cn.m15.xys;

import java.util.LinkedList; 
import java.util.List; 
import android.app.Activity; 
import android.app.Application; 

public class SysApplication extends Application {
	private List<Activity> mList = new LinkedList<Activity>();
    
    private static SysApplication instance; 
    
    private SysApplication(){}
    public synchronized static SysApplication getInstance(){ 
        if (null == instance) { 
            instance = new SysApplication(); 
        } 
        return instance; 
    } 
    // add Activity  
    public void addActivity(Activity activity) { 
        mList.add(activity); 
    } 
    
    
    //close every activities in the list    关闭每一个list内的activity
    public void exit() { 
        try { 
            for (Activity activity:mList) { 
                if (activity != null) 
                    activity.finish(); 
            } 
        } catch (Exception e) { 
        	int app=0;  
        } finally { 
            int app=0; 
        } 
    } 
    //kill thread 杀进程
    public void onLowMemory() { 
        super.onLowMemory();     
        System.gc(); 
    }  

}
