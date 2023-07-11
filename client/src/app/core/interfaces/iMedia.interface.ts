
/**
 * iMedia - Main media context for user apresentation
 */
export interface iMedia {
    id:number,
    genre_id:number,

    title:string,
    description:string,
    image_url:string,
    trailer_url:string,
    type:string|enumMediaType,

    seasons_count:number, //movie=> 0
    episodes_count:number, //movie=> 1

    base_video_id?:number,
    base_season_id?:number,
    base_episode_id?:number,
    seasons?:Array<iSeason>|[],
    videos?:Array<iVideo>

    created_at:string,
    updated_at:string,
}

/**
 * iVideo - Video content. Used for both movie & serie
 */
export interface iVideo {
    id:number,
    media_id:number,
    next_episode_id?:number,

    title?:string,
    description?:string,
    base_media_url:string,

    season?:number,
    episode?:number,

    media?:iMedia,
    
    created_at:string,
    updated_at:string,
}

export interface iSeason {
    season:number,
    videos:Array<iVideo>|[]
}

export enum enumMediaType {
    'MOVIE',
    'SERIE',
}